<?php

namespace App\Livewire\Admin;

use App\Models\Building;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithFileUploads;

class Service extends Component
{
    public $id,$title,$slug,$heading="Add Immune Scoring Systems",$is_form,$document,$document_path,$description,$image,$meta_title,$meta_keyword,$meta_description,$image_url,$description_content;
    use ImageTrait;
    use WithFileUploads;

    protected $rules=[
        'title'=>'required|max:225',
        'slug'=>'required',
        'description_content'=>'required',
        'is_form'=>'required',
        'meta_title'=>'required',
        'meta_description'=>'required',
        'meta_keyword'=>'required',
    ];

    public function render()
    {
        $buildings=Building::paginate(15);
        return view('livewire.admin.service',compact("buildings"))->extends("admin.layouts.master")->section("content");
    }


    public function addBuilding()
    {
        $this->validate();
        try {
            $image_path=$this->imagePath($this->image,"building");
            if($this->document!=null)
            {
                $doc_path=$this->imagePath($this->document,"document");
            }else{
                $doc_path=null;
            }

            Building::create([
                'title'=>$this->title,
                'slug'=>$this->slug,
                'image'=>$image_path,
                'status'=>1,
                'document_path'=>$doc_path,
                'description'=>$this->description_content,
                'is_form'=>$this->is_form,
                'meta_title'=>$this->meta_title,
                'meta_keyword'=>$this->meta_keyword,
                'meta_description'=>$this->meta_description,
            ]);
            $this->dispatch('dismissmodal',message:"Immune Scoring Systems Added Successfully",parameter:'200');
        } catch (\Exception $e) {
            Log::info($e);
            $this->dispatch('dismissmodal',message: $e->getMessage(),parameter:'400');
        }
    }

    public function editBuilding($id)
    {
        $service=Building::where('id',$id)->first();
        
        if($service!=null)
        {
            $this->id=$service->id;
            $this->title=$service->title;
            $this->description_content=$service->description;
            $this->description=$service->description;
            $this->slug=$service->slug;
            $this->meta_title=$service->meta_title;
            $this->meta_keyword=$service->meta_keyword;
            $this->meta_description=$service->meta_description;
            $this->is_form=$service->is_form;
            $this->image_url=url($service->image);
            $this->document_path=url($service->document_path);
            $this->heading="Edit Immune Scoring Systems";
            $this->dispatch("message",parameter:"200",description:$this->description_content);
        }else{
            $this->dispatch("message",message:"Immune Scoring Systems Not Found",parameter:"400");
        }

        return true;    
    }

    public function updateBuilding()
    {
        $this->validate();
        try {
            $image_path=($this->image!=null)?$this->imagePath($this->image,"building"):Building::where('id',$this->id)->pluck('image')->first();
            $doc_path=($this->document!=null)?$this->imagePath($this->document,"document"):Building::where('id',$this->id)->pluck('document_path')->first();
            
            Building::where('id',$this->id)->update([
                'title'=>$this->title,
                'description'=>$this->description_content,
                'image'=>$image_path,
                'document_path'=>$doc_path,
                'slug'=>$this->slug,
                'is_form'=>$this->is_form,
                'meta_title'=>$this->meta_title,
                'meta_keyword'=>$this->meta_keyword,
                'meta_description'=>$this->meta_description,
            ]);
            $this->dispatch('dismissmodal',message: "Immune Scoring Systems Updated Successfully",parameter:'200');
        } catch (\Exception $e) {
            Log::info($e);
            $this->dispatch('dismissmodal',message: $e->getMessage(),parameter:'400');
        }
    }

    public function deleteBuilding($value)
    {
        if(Building::where('id',$value)->exists())
        {
            Building::where('id',$value)->delete();
            $this->dispatch('delete',parameter:"200");
        }else{
            $this->dispatch('delete',parameter:"400",message:"Immune Scoring Systems Not Found");
        }
    }

    public function setContent($value)
    {
        $this->description_content=$value;
        return true;
    }

    public function statusBuilding($id)
    {
        try {
            Building::where("id",$id)->update([
                'status'=>!Building::where("id",$id)->pluck('status')->first()
            ]);
            $this->dispatch('dismissmodal',message: 'Immune Scoring Systems Status Updated Successfully',parameter:'200');
        } catch (\Throwable $th) {
            $this->dispatch('dismissmodal',message: $th->getMessage(),parameter:'400');
        }
    }
}
