<h1>{{ project.name }}</h1>

<!--<table border="1">-->
    <!--{% for project in projects %}-->
    <!--<tr>-->
        <!--<td>{{ project.name }}</td>-->
        <!--<td>{{ project.description }}</td>-->
        <!--<td>{{ project.gestion_id }}</td>-->
    <!--</tr>-->
    <!--{% endfor %}-->
<!--</table>-->

<p>
    {{ link_to('projects/add/' ~ project.id, 'Add Option') }}
    {{ link_to('projects/', 'Go Back') }}
</p>
