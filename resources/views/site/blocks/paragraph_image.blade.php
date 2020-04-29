@php
$align = $block->input('variable_image_alignment');
$dsk = $block->input('variable_image_width_desktop');
$tblt = $block->input('variable_image_width_tablet');
@endphp

<section>
	<figure class="mb-4 w-full float-none {{ $tblt }} {{ $dsk }} {{ $align }}">
		<img src="{!! $block->image('variable_image', 'default') !!}" alt="" class="w-full">
	</figure>

	<span class="text_block">
		{!! $block->input('paragraph') !!}
	</span>
</section>