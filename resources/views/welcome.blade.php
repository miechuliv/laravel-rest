<!DOCTYPE html>
<html ng-app="myApp" ng-app lang="en">
<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    ul>li, a{cursor: pointer;}
    </style>
    <title>Simple Datagrid with search, sort and paging using AngularJS, PHP, MySQL</title>
</head>
<body>
<div class="navbar navbar-default" id="navbar">
    <div class="container" id="navbar-container">
    <div class="navbar-header">
        <a href="http://angularcode.com" class="navbar-brand">
            <small>
                <i class="glyphicon glyphicon-log-out"></i>
                AngularCode / AngularJS Demos 
            </small>
        </a><!-- /.brand -->
        
    </div><!-- /.navbar-header -->
    <div class="navbar-header pull-right" role="navigation">
        <a href="http://angularcode.com/angularjs-datagrid-paging-sorting-filter-using-php-and-mysql/" class="btn btn-sm btn-danger nav-button-margin"> <i class="glyphicon glyphicon-book"></i>&nbsp;Tutorial Link</a>
        <a href="http://angularcode.com/download-link/?url=https://app.box.com/s/kyomkfyeb42irie6rxcl" class="btn btn-sm btn-warning nav-button-margin"> <i class="glyphicon glyphicon-download"></i>&nbsp;Download Project</a>
    </div>
    </div>
</div>


<div ng-controller="customersCrtl">
<div class="container">
<br/>
<blockquote><h4><a href="http://angularcode.com/angularjs-datagrid-paging-sorting-filter-using-php-and-mysql/">Simple Datagrid with search, sort and paging using AngularJS + PHP + MySQL</a></h4></blockquote>
<br/>
    <div class="row">
        <div class="col-md-2">PageSize:
            <select ng-model="entryLimit" class="form-control">
                <option>5</option>
                <option>10</option>
                <option>20</option>
                <option>50</option>
                <option>100</option>
            </select>
        </div>
        <div class="col-md-3">Filter:
            <input type="text" ng-model="search" ng-change="filter()" placeholder="Filter" class="form-control" />
        </div>
        <div class="col-md-4">
            <h5>Filtered <% filtered.length %> of <% totalItems%> total customers</h5>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-12" ng-show="filteredItems > 0">
            <table class="table table-striped table-bordered">
            <thead>
            <th>Carmake name&nbsp;<a ng-click="sort_by('name');"><i class="glyphicon glyphicon-sort"></i></a></th>
            
            </thead>
            <tbody>
                <tr ng-repeat="data in filtered = (list | filter:search | orderBy : predicate :reverse) | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">
                    <td><%data.name%></td>
                    
                </tr>
            </tbody>
            </table>
        </div>
        <div class="col-md-12" ng-show="filteredItems == 0">
            <div class="col-md-12">
                <h4>No customers found</h4>
            </div>
        </div>
        <div class="col-md-12" ng-show="filteredItems > 0">    
            <div pagination="" page="currentPage" on-select-page="setPage(page)" boundary-links="true" total-items="filteredItems" items-per-page="entryLimit" class="pagination-small" previous-text="&laquo;" next-text="&raquo;"></div>
            
            
        </div>
    </div>
</div>
</div>
<script src="js/angular.min.js"></script>
<script src="js/ui-bootstrap-tpls-0.10.0.min.js"></script>
<script src="app/app.js"></script>         
    </body>
</html>