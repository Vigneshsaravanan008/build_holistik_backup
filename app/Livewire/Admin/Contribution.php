<?php

namespace App\Livewire\Admin;

use App\Models\Contribution as ModelsContribution;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;

class Contribution extends Component
{
    public $name,$image,$image_url,$description,$country,$website,$title="Add Contribution",$status,$id;

    use WithFileUploads,ImageTrait;
    use WithPagination;

    protected $rules=[
        'name'=>'required|max:225',
        'image'=>"nullable|image",
        "description"=>"required",
        "country"=>"required",
    ];

    public function render()
    {
        $contributions=ModelsContribution::paginate(15);
        return view('livewire.admin.contribution',compact("contributions"))->extends('admin.layouts.master')->section('content');
    }

    public function addContribution()
    {
        $this->validate();

        if($this->image!=null)
        {
            $image=$this->imagePath($this->image,"contribution");
        }else{
            $image=null;
        }

        try {
            ModelsContribution::create([
                'name'=>$this->name,
                'image'=>$image,
                'description'=>$this->description,
                'website'=>$this->website,
                'country'=>$this->country,
                'status'=>1,
            ]);

            $this->dispatch('dismissmodal',message: 'Contribution Added Successfully',parameter:'200');
        } catch (\Exception $e) {
            Log::info($e);
            $this->dispatch('dismissmodal',message: $e->getMessage(),parameter:'400');
        }
    }

    public function editContribution($id)
    {
        $contribution=ModelsContribution::where('id',$id)->first();

        if($contribution!=null)
        {
            $this->id=$contribution->id;
            $this->title="Edit Contribution";
            $this->name=$contribution->name;
            $this->website=$contribution->website;
            $this->country=$contribution->country;
            $this->description=$contribution->description;
            $this->image_url=asset($contribution->image);
            $this->dispatch("message",parameter:"200");
        }else{
            $this->dispatch("message",message:"Contribution Not Found",parameter:"400");
        }

        return true;
    }

    public function updateContribution()
    {
        $this->validate();
        try {
            $contribution=ModelsContribution::where('id',$this->id)->first();

            if($this->image!=null)
            {
                $image=$this->imagePath($this->image,"contribution");
            }else{
                $image=$contribution->image;
            }

            ModelsContribution::where('id',$this->id)->update([
                'name'=>$this->name,
                'image'=>$image,
                'description'=>$this->description,
                'country'=>$this->country,
                'website'=>$this->website,
            ]);

            $this->dispatch('dismissmodal',message: 'Contribution Updated Successfully',parameter:'200');
        } catch (\Exception $e) {
            $this->dispatch('dismissmodal',message: $e->getMessage(),parameter:'400');
        }
    }

    public function deleteContribution($value)
    {
        if(ModelsContribution::where('id',$value)->exists())
        {
            ModelsContribution::where('id',$value)->delete();
            $this->dispatch('delete',parameter:"200");
        }else{
            $this->dispatch('delete',parameter:"400",message:"Contribution Not Found");
        }
    }

    public function statusContribution($id)
    {
        try {
            ModelsContribution::where("id",$id)->update([
                'status'=>!ModelsContribution::where("id",$id)->pluck('status')->first()
            ]);
            $this->dispatch('dismissmodal',message: 'Contribution Status Updated Successfully',parameter:'200');
        } catch (\Throwable $th) {
            $this->dispatch('dismissmodal',message: $th->getMessage(),parameter:'400');
        }
    }
}
