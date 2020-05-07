<?php

return [
	'dashboard' => [
		'modules' => [
			'App\Models\Project' => [
				'name' => 'projects',
				'count' => true,
				'create' => true,
				'activity' => true,
				'draft' => true,
				'search' => true,
				'search_fields' => ['title'],
			],
			'App\Models\Contributor' => [
				'name' => 'contributors',
				'count' => true,
				'create' => true,
				'activity' => true,
				'draft' => true,
				'search' => true,
				'search_fields' => ['name'],
			],
		],
	],
	'file_library' => [
		'filesize_limit' => 10,
		'allowed_extensions' => ['pdf'],
	],
	'block_editor' => [
		'block_single_layout' => 'layouts.block',
		'crops' => [
			'project_image' => [
				'default' => [
					[
						'name' => 'default',
						'ratio' => 16 / 9,
					],
				],
			],
			'variable_image' => [
				'default' => [
					[
						'name' => 'default',
					],
				],
			],
		],
		'blocks' => [
			'quote' => [
				'title' => 'Quote',
				'icon' => 'quote',
				'component' => 'a17-block-quote',
				'rules' => [
					'quote_text' => 'required',
				],
			],
			'paragraph' => [
				'title' => 'Paragraph',
				'icon' => 'text',
				'component' => 'a17-block-paragraph',
			],
			'paragraph_image' => [
				'title' => 'Paragraph & Image',
				'icon' => 'image-text',
				'component' => 'a17-block-paragraph_image',
			],
			'project_detail' => [
				'title' => 'Past Project Spotlight',
				'icon' => 'content-editor',
				'component' => 'a17-block-project_detail',
				'rules' => [
					'project_title' => 'required',
					'project_url' => 'required|url',
					'project_description' => 'required',
				],
			],
		],
		'repeaters' => [
			'credit' => [
				'title' => 'Credit',
				'trigger' => 'Add credit',
				'component' => 'a17-block-credit',
			],
		],
	],
];
