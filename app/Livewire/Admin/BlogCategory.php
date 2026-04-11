<?php

namespace App\Livewire\Admin;

use App\Models\MediaCoverageCategory;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithPagination;

class BlogCategory extends Component
{
    public $name,$title="Add MediaCoverage Category",$status,$id;

    use WithPagination;
    protected $rules=[
        'name'=>'required|max:225',
    ];
    public function render()
    {
        $media_categories=MediaCoverageCategory::paginate(15);
        return view('livewire.admin.blog-category',compact("media_categories"))->extends('admin.layouts.master')->section('content');
    }

    public function addMediaCategory()
    {
        $this->validate();
        try {
            MediaCoverageCategory::create([
                'name'=>$this->name,
                'status'=>1,
            ]);

            $this->dispatch('dismissmodal',message: 'Media Coverage Category Added Successfully',parameter:'200');
        } catch (\Exception $e) {
            Log::info($e);
            $this->dispatch('dismissmodal',message: $e->getMessage(),parameter:'400');
        }
    }

    public function editMediaCategory($id)
    {
        $media_category=MediaCoverageCategory::where('id',$id)->first();

        if($media_category!=null)
        {
            $this->id=$media_category->id;
            $this->title="Edit Media Coverage Category";
            $this->name=$media_category->name;
            $this->dispatch("message",parameter:"200");
        }else{
            $this->dispatch("message",message:"Media Coverage Category Not Found",parameter:"400");
        }

        return true;
    }

    public function updateMediaCategory()
    {
        $this->validate();
        try {
            MediaCoverageCategory::where('id',$this->id)->update([
                'name'=>$this->name,
            ]);

            $this->dispatch('dismissmodal',message: 'Media Coverage Category Updated Successfully',parameter:'200');
        } catch (\Exception $e) {
            $this->dispatch('dismissmodal',message: $e->getMessage(),parameter:'400');
        }
    }

    public function deleteMediaCategory($value)
    {
        if(MediaCoverageCategory::where('id',$value)->exists())
        {
            MediaCoverageCategory::where('id',$value)->delete();
            $this->dispatch('delete',parameter:"200");
        }else{
            $this->dispatch('delete',parameter:"400",message:"Media Coverage Category Not Found");
        }
    }

    public function statusMediaCategory($id)
    {
        try {
            MediaCoverageCategory::where("id",$id)->update([
                'status'=>!MediaCoverageCategory::where("id",$id)->pluck('status')->first()
            ]);
            $this->dispatch('dismissmodal',message: 'Media Coverage Category Status Updated Successfully',parameter:'200');
        } catch (\Throwable $th) {
            $this->dispatch('dismissmodal',message: $th->getMessage(),parameter:'400');
        }
    }
}
