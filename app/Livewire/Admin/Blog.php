<?php

namespace App\Livewire\Admin;

use App\Models\MediaCoverage;
use App\Models\MediaCoverageCategory;
use App\Traits\ImageTrait;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;

class Blog extends Component
{
    public $title,$image,$image_url,$description,$media_coverage_category_id,$id,$model_title="Add Media Coverage",$slug,$short_description,$description_content,$post_date,$author_name;

    use WithFileUploads,ImageTrait;
    use WithPagination;

    protected $rules = [
        'image'=>'nullable|image',
        'title'=>'required',
        'short_description'=>'required|max:500',
        'description'=>'nullable',
        'post_date'=>'required',
        'author_name'=>'nullable',
        'media_coverage_category_id'=>'required',
        'slug'=>'required',
    ];

    public function render()
    {
        $media_coverages=MediaCoverage::paginate(15);
        $media_categories=MediaCoverageCategory::select('id',"name")->get();
        return view('livewire.admin.blog',compact("media_coverages","media_categories"))->extends('admin.layouts.master')->section('content');
    }

    public function setMediaCategory($value)
    {
        $this->media_coverage_category_id=$value;
    }

    public function calljs()
    {
        $this->dispatch('calljs');
        return true;
    }

    public function addMediaCoverage()
    {
        try {
            $this->validate();
            if($this->image!=null)
            {
                $image=$this->imagePath($this->image,"mediacoverage");
            }else{
                $image=null;
            }

            MediaCoverage::create([
                'title'=>$this->title,
                'media_coverage_category_id'=>$this->media_coverage_category_id,
                'short_description'=>$this->short_description,
                'description'=>$this->description_content,
                'slug'=>$this->slug,
                'status'=>1,
                'author_name'=>$this->author_name,
                'post_date'=>Carbon::parse($this->post_date)->format("Y-m-d"),
                'image'=>$image,
            ]);
            $text='Media Coverage Added Successfully';
            $this->dispatch('dismissmodal',message:$text ,parameter:'200');
        } catch (\Exception $e) {
            Log::info($e);
            $this->dispatch('dismissmodal',message: $e->getMessage(),parameter:'400');
        }
    }

    public function editMediaCoverage($id)
    {
        $media_coverage=MediaCoverage::where('id',$id)->first();
        
        if($media_coverage!=null)
        {
            $this->id=$media_coverage->id;
            $this->title=$media_coverage->title;
            $this->media_coverage_category_id=$media_coverage->media_coverage_category_id;
            $this->short_description=$media_coverage->short_description;
            $this->description_content=$media_coverage->description;
            $this->description=$media_coverage->description;
            $this->slug=$media_coverage->slug;
            $this->author_name=$media_coverage->author_name;
            $this->post_date=Carbon::parse($media_coverage->post_date)->format("Y-m-d");
            $this->image_url=$media_coverage->image? asset($media_coverage->image):null;
            $this->model_title="Edit Media Coverage";
            $this->dispatch("message",parameter:"200",description:$this->description_content);
        }else{
            $this->dispatch("message",message:"Blogs Not Found",parameter:"400");
        }

        return true;    
    }

    public function updateMediaCoverage()
    {
        $this->validate();
        try {
            $image=($this->image!=null)?$this->imagePath($this->image,"mediacoverage"):MediaCoverage::where('id',$this->id)->pluck('image')->first();

            MediaCoverage::where('id',$this->id)->update([
                'title'=>$this->title,
                'media_coverage_category_id'=>$this->media_coverage_category_id,
                'short_description'=>$this->short_description,
                'description'=>$this->description_content,
                'image'=>$image,
                'slug'=>$this->slug,
                'author_name'=>$this->author_name,
                'post_date'=>Carbon::parse($this->post_date)->format("Y-m-d"),
            ]);
            $text='Blogs Updated Successfully';
            $this->dispatch('dismissmodal',message: $text,parameter:'200');
        } catch (\Exception $e) {
            Log::info($e);
            $this->dispatch('dismissmodal',message: $e->getMessage(),parameter:'400');
        }
    }

    public function deleteMediaCoverage($value)
    {
        if(MediaCoverage::where('id',$value)->exists())
        {
            MediaCoverage::where('id',$value)->delete();
            $this->dispatch('delete',parameter:"200");
        }else{
            $this->dispatch('delete',parameter:"400",message:"Media Coverage Not Found");
        }
    }

    public function setContent($value)
    {
        $this->description_content=$value;
        return true;
    }

    public function statusMediaCoverage($id)
    {
        try {
            MediaCoverage::where("id",$id)->update([
                'status'=>!MediaCoverage::where("id",$id)->pluck('status')->first()
            ]);
            $this->dispatch('dismissmodal',message: 'Media Coverage Status Updated Successfully',parameter:'200');
        } catch (\Throwable $th) {
            $this->dispatch('dismissmodal',message: $th->getMessage(),parameter:'400');
        }
    }

}
