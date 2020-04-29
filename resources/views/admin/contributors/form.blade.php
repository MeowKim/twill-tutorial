@extends('twill::layouts.form')

@section('contentFields')
@formField('tags', [
'label' => 'Skills',
'note' => 'HTML, Frontend, Designer, etc ..',
])

@formField('files', [
'name' => 'resume',
'label' => 'Resume',
'note' => 'File should be a PDF.',
])

@formField('medias', [
'name' => 'avatar',
'label' => 'Avatar',
'note' => 'A photo of you.',
])

@formField('input', [
'name' => 'email',
'label' => 'Contact Email',
'maxlength' => 200,
])

@formField('input', [
'name' => 'twitter',
'label' => 'Twitter',
'note' => '@twill4eva',
'maxlength' => 200,
])

@formField('input', [
'name' => 'portfolio_link',
'label' => 'Portfolio URL',
'note' => 'GitHub, Dribble, CodePen, etc.',
'placeholder' => 'http://behance.com/sbass',
'maxlength' => 200,
])

@formField('input', [
'name' => 'linkedin',
'label' => 'LinkedIn',
'placeholder' => 'http://linkedin.com/sbass',
'maxlength' => 200,
])

@formField('block_editor', [
'label' => 'Skill Biography',
'blocks' => [
'quote', 'paragraph', 'paragraph_image', 'project_detail',
],
])
@stop