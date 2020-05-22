<?php
namespace App\Repositories\Post\Category;

use App\Repositories\EloquentRepository;
use Hash;
class CategoryRepository extends EloquentRepository implements CategoryRepositoryInterface
{

    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\Categories::class;
    }
    public function getAllPaginate($per_page,$term = ''){
        $data = $this->_model->orderBy('id','DESC');
        if($term){
            $data->where('title','LIKE',"%$term%");
        }
        $data = $data->paginate($per_page);
        return $data;
    }
    public function getTags($per_page,$term=''){
        $data = $this->_model->where('taxonomy','tag')->orderBy('id','DESC');
        if($term){
            $data->where('title','LIKE',"%$term%");
        }
        $data = $data->paginate($per_page);
        return $data;
    }
    public function getCategories($attributes){
        $data = $this->_model->where('taxonomy','category')->orderBy('id','DESC');
        if($attributes->filled('s')){
            $s = $attributes->get('s');
            $data->where('title','LIKE',"%$s%");
        }
        $data = $data->get();
        return $data;
    }
    public function getCategoriesbyArrayId($data){
        return 1;
    }
    
}