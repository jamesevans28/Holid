@extends('templates.master')

@section('content')

<h1>Create New Project</h1>
{{ Form::open(array('url' => 'foo/bar')) }}
<table>
    <tr>
        <td>Project Title</td>
        <td>
    </tr>
</table>

{{ Form::close() }}

@stop