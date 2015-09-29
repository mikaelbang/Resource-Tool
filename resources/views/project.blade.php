@extends('header')

@section('content')
    <div class="table-responsive  col-lg-10 col-lg-offset-1 indexContent">
        <button type="button" class="btn btn-primary btn-lg active"><span class="glyphicon glyphicon-plus"></span> Add new project</button>
        <table class="table table-striped table-condensed indexTable">
            <h1 class="text-left projectHeadline">Projects</h1>
            <thead>
                <tr>
                    <th class="text-left">Project ID</th>
                    <th class="text-left">Project Nr</th>
                    <th class="text-left">Start Date</th>
                    <th class="text-left">End Date</th>
                    <th class="text-left"></th>
                </tr>
            </thead>
            <tr>
                <td class="text-left tableItem">Project info</td>
                <td class="text-left tableItem">Project info</td>
                <td class="text-left tableItem">Project info</td>
                <td class="text-left tableItem">Project info</td>
                <td class="text-left tableItem"><button>View/Edit</button></td>
            </tr>
            <tr>
                <td class="text-left tableItem">Project info</td>
                <td class="text-left tableItem">Project info</td>
                <td class="text-left tableItem">Project info</td>
                <td class="text-left tableItem">Project info</td>
                <td class="text-left tableItem"><button>View/Edit</button></td>
            </tr>
            <tr>
                <td class="text-left tableItem">Project info</td>
                <td class="text-left tableItem">Project info</td>
                <td class="text-left tableItem">Project info</td>
                <td class="text-left tableItem">Project info</td>
                <td class="text-left tableItem"><button>View/Edit</button></td>
            </tr>
        </table>
    </div>

@stop