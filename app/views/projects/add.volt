<h1>Add Project</h1>

<form method="post">
    <p>
        Name {{ text_field('name') }}
    </p>

    <p>
        Description {{ text_field('description') }}
    </p>

    <p>
        {{ submit_button('Save') }}
        {{ link_to('projects/', 'cancel') }}

    </p>
</form>