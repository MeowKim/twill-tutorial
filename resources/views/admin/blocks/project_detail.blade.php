@formField('input', [
'name' => 'project_title',
'label' => 'Project Title',
'maxlength' => 200,
])

@formField('input', [
'name' => 'project_url',
'label' => 'Project URL',
'maxlength' => 200,
])

@formField('medias', [
'name' => 'project_image',
'label' => 'Image',
])

@formField('wysiwyg', [
'name' => 'project_description',
'label' => 'Project Description',
'toolbarOptions' => [
'bold', 'italic', 'link', 'clean',
],
'placeholder' => 'Briefly describe this project as well as your role.',
'maxlength' => 235,
'type' => 'textarea',
'rows' => 5,
'note' => 'Describe the project.',
])