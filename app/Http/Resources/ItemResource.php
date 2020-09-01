<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\BrandResource;
use App\Http\Resources\SubcategoryResource;
use App\Brand;
use App\Subcategory;

class ItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return
        [
            "item_id"=>$this->id,
            "codeno"=>$this->codeno,
            "item_name"=>$this->name,
            "item_photo"=>$this->photo,
            "item_price"=>$this->price,
             "item_discount"=>$this->discount,
            "item_description"=>$this->description,
            "brand"=>new BrandResource(Brand::find($this->brand_id)),
             "subcategory"=>new SubcategoryResource(Subcategory::find($this->subcategory_id)),
        ];
    }
}
