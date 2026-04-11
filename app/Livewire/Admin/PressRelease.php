<?php

namespace App\Livewire\Admin;

use App\Models\PressRelease as ModelsPressRelease;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\Log;

class PressRelease extends Component
{
    public $title,$banner_image,$image_url,$description,$blog_category_id,$id,$model_title="Add PressRelease",$slug,$meta_title,$meta_keyword,$meta_description,$short_description,$description_content;

    use WithFileUploads,ImageTrait;
    use WithPagination;

    protected $rules = [
        'title'=>'required',
        'short_description'=>'required|max:500',
        'description'=>'nullable',
        'slug'=>'required',
        'banner_image'=>'nullable',
        'meta_title'=>'nullable|max:225',
        'meta_keyword'=>'nullable|max:225',
        'meta_description'=>'nullable|max:225',
    ];


    public function render()
    {
        $press_releases=ModelsPressRelease::paginate(15);
        return view('livewire.admin.press-release',compact("press_releases"))->extends('admin.layouts.master')->section('content');
    }

    public function calljs()
    {
        $this->dispatch('calljs');
        return true;
    }

    public function addPressRelease()
    {
        $this->validate();
        try {
            if($this->banner_image!=null)
            {
                $banner_image=$this->imagePath($this->banner_image,"pressrelease");
            }else{
                $banner_image=null;
            }

            ModelsPressRelease::create([
                'title'=>$this->title,
                'short_description'=>$this->short_description,
                'description'=>$this->description_content,
                'slug'=>$this->slug,
                'meta_title'=>$this->meta_title ?? $this->title,
                'meta_keyword'=>$this->meta_keyword ?? $this->title,
                'meta_description'=>$this->meta_description ?? $this->title,
                'banner_image'=>$banner_image,
            ]);
            $text='Press Release Added Successfully';
            $this->dispatch('dismissmodal',message:$text ,parameter:'200');
        } catch (\Exception $e) {
            Log::info($e);
            $this->dispatch('dismissmodal',message: $e->getMessage(),parameter:'400');
        }
    }

    public function editPressRelease($id)
    {
        $press_release=ModelsPressRelease::where('id',$id)->first();
        
        if($press_release!=null)
        {
            $this->id=$press_release->id;
            $this->title=$press_release->title;
            $this->short_description=$press_release->short_description;
            $this->description_content=$press_release->description;
            $this->description=$press_release->description;
            $this->slug=$press_release->slug;
            $this->meta_title=$press_release->meta_title;
            $this->meta_keyword=$press_release->meta_keyword;
            $this->meta_description=$press_release->meta_description;
            $this->image_url=$press_release->banner_image? asset($press_release->banner_image):null;
            $this->model_title="Edit Blog";
            $this->dispatch("message",parameter:"200",description:$this->description_content);
        }else{
            $this->dispatch("message",message:"Press Release Not Found",parameter:"400");
        }

        return true;    
    }

    public function updatePressRelease()
    {
        $this->validate([
            'title'=>'required',
            'short_description'=>'required|max:500',
            'description'=>'required',
            'slug'=>'required',
            'meta_title'=>'nullable|max:225',
            'meta_keyword'=>'nullable|max:225',
            'meta_description'=>'nullable|max:225',
        ]);
        try {
            $banner_image=($this->banner_image!=null)?$this->imagePath($this->banner_image,"pressrelease"):ModelsPressRelease::where('id',$this->id)->pluck('banner_image')->first();

            ModelsPressRelease::where('id',$this->id)->update([
                'title'=>$this->title,
                'short_description'=>$this->short_description,
                'description'=>$this->description_content,
                'banner_image'=>$banner_image,
                'slug'=>$this->slug,
                'meta_title'=>$this->meta_title,
                'meta_keyword'=>$this->meta_keyword,
                'meta_description'=>$this->meta_description,
            ]);
            $text='Press Release Updated Successfully';
            $this->dispatch('dismissmodal',message: $text,parameter:'200');
        } catch (\Exception $e) {
            Log::info($e);
            $this->dispatch('dismissmodal',message: $e->getMessage(),parameter:'400');
        }
    }

    public function deletePressRelease($value)
    {
        if(ModelsPressRelease::where('id',$value)->exists())
        {
            ModelsPressRelease::where('id',$value)->delete();
            $this->dispatch('delete',parameter:"200");
        }else{
            $this->dispatch('delete',parameter:"400",message:"Press Release Not Found");
        }
    }

    public function setContent($value)
    {
        $this->description_content=$value;
        return true;
    }

    public function statusPressRelease($id)
    {
        try {
            ModelsPressRelease::where("id",$id)->update([
                'status'=>!ModelsPressRelease::where("id",$id)->pluck('status')->first()
            ]);
            $this->dispatch('dismissmodal',message: 'Press Release Status Updated Successfully',parameter:'200');
        } catch (\Throwable $th) {
            $this->dispatch('dismissmodal',message: $th->getMessage(),parameter:'400');
        }
    }
}
