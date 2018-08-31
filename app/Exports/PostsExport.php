<?php

namespace App\Exports;

use App\Post;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PostsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $posts = array('');
        return Post::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'User ID',
            'Title',
            'Sub Title',
            'Author',
            'Content',
            'Image',
            'Created At',
            'Updated At',
        ];
    }
}
