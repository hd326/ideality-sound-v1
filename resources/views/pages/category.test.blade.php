

If there is no second slug, (the sub_category), then we display the category and it's children
@if(empty($sub_categories))
{{ $category->name }}
@foreach($category->posts as $post)
{{ $post->id }}
@endforeach
@endif


@foreach($sub_categories as $subcategories)
{{ $subcategories->name }}
@foreach($subcategories->posts as $post)
{{ $post->id }}
@endforeach
@endforeach


{{-- If there is a second slug, we only display information for the secon slug --}}
@if(empty($sub_categories))
{{ $sub_category->name }}
@foreach($sub_category->posts as $post)
{{ $post->id }}
@endforeach
@endif
