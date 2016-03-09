@extends('layouts.app')

@section('content')


  <div class="container container-user">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

        <div id="modal-create-edit" class="modal fade" role="dialog">
          <div class="modal-dialog">
          <script id="create-edit" type="text/x-jsrender">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                      @{{if id}}
                        Edit #@{{:id}}
                      @{{else}}
                        Create
                      @{{/if}}
                </h4>
              </div>
              <div class="modal-body">
                <div class="alert-control alert"></div>
                <p></p>

                <div class="form-group row">
                    <label class="col-md-4 control-label">Full Name</label>

                    <div class="col-md-6">
                        <input name="name" class="form-control" value="@{{:attributes.name}}">
                        <span class="help-block hide">
                            <strong></strong>
                        </span>                                
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 control-label">E-Mail Address</label>

                    <div class="col-md-6">
                        <input name="email" class="form-control" value="@{{:attributes.email}}">
                        <span class="help-block hide">
                            <strong></strong>
                        </span>                                
                    </div>
                </div>

              </div>
              <div class="modal-footer">
                <input name="id" class="hide" value="@{{:id}}">
                <button type="submit" class="btn btn-success">
                  @{{if id}}
                    Save
                  @{{else}}
                    Create
                  @{{/if}}
                </button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </script>
          <form action="api/admin/user" class="create-edit"></form>
          </div>
        </div>
       
        <div class="alert-control alert"></div>

        <div class="row">
          <div class="col-xs-8">
            <h1 style="margin:0">User Management</h1>
          </div>
          <div class="col-xs-4 text-right">
            <button type="button" class="btn btn-default btn-refresh"><em class="fa fa-refresh"></em></button>
            <button type="button" class="btn btn-primary btn-create" data-toggle="modal" data-target="#modal-create-edit">Create New</button>
          </div>
        </div>
        <hr>

        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <div class="row">
              <div class="col col-xs-7 col-md-9">
                <h3 class="panel-title">&nbsp;</h3>
              </div>
              <div class="col col-xs-5 col-md-3 text-right">

                <form class="form-inline search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="q">
                    <div class="input-group-btn">
                      <button type="submit" class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="panel-body">
            <table class="table table-striped table-bordered table-list" data-href="api/admin/user">
              <thead>
                <th><em class="fa fa-cog"></em></th>
                <th class="hidden-xs" data-col="id">ID <em class="fa fa-fw fa-sort pull-right em-sort"></th>
                <th data-col="name">Name <em class="fa fa-fw fa-sort pull-right em-sort"></em></th>
                <th data-col="email">E-mail <em class="fa fa-fw fa-sort pull-right em-sort"></em></th>
              </thead>
              <tbody>
                <tr><td colspan="4">Loading...</td></tr>
              </tbody>
            </table>

          </div>
          <div class="panel-footer">
            <div class="row">
              <div class="col col-xs-4">
                <form class="form-inline">
                  <select name="limit" class="form-control">
                    <option>1
                    <option>10
                  </select>
                </form>
              </div>
              <div class="col col-xs-8 list-pagination">
              </div>
            </div>
          </div>
        </div>

        <script id="no-results" type="text/x-jsrender">
          <tr>
            <td colspan="5"><strong>No Results Found.</strong></td>
          </tr>
        </script>

        <script id="row-item" type="text/x-jsrender">
          <tr>
            <td align="center">
              <button type="button" class="btn btn-default" data-action="read" data-href="api/admin/user/@{{:id}}" data-toggle="modal" data-target="#modal-create-edit"><em class="fa fa-pencil"></em></button>
              <button type="button" class="btn btn-danger" data-action="delete" data-href="api/admin/user/@{{:id}}"><em class="fa fa-trash"></em></button>
            </td>
            <td class="hidden-xs">@{{:id}}</td>
            <td>@{{:attributes.name}}</td>
            <td>@{{:attributes.email}}</td>
          </tr>
        </script>

        <script id="list-pagination" type="text/x-jsrender">
          <ul class="pagination pull-right">
            @{{if links.prev}}<li><span data-href="@{{:links.prev}}">&laquo;</span></li>@{{/if}}
            <li><span disabled>@{{:meta.currentPage}} of @{{:meta.total}}</span></li>
            @{{if links.next}}<li><span data-href="@{{:links.next}}">&raquo;</span></li>@{{/if}}
          </ul>
        </script>

    </div>
</div>
@endsection