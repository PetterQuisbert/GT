<h1>{{ poll.question }}</h1>

<table border="1">
    {% for option in options %}
    <tr>
        <td>{{ option.name }}</td>
        <td>{{ option.number_votes }}</td>
        <td>{{ link_to('poll/vote/' ~ option.id, 'Vote') }}</td>
    </tr>
    {% endfor %}
</table>

<p>
    {{ link_to('poll/add/' ~ poll.id, 'Add Option') }}
    {{ link_to('poll/', 'Go Back') }}
</p>
