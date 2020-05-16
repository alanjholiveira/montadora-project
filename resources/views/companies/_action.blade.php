<a href="{{route('companies.edit', $data)}}" id="edit" name="edit" data-remote="true" class="btn btn-primary btn-sm">
    <i class="fa fa-edit"></i>
</a>
<a href="{{route('companies.show', $data)}}" data-remote="true" class="btn btn-secondary btn-sm">
    <i class="fa fa-eye"></i>
</a>
<a href="{{route('companies.show',$data)}}" data-remote="true" data-method="DELETE" class="btn btn-danger btn-sm">
    <i class="fa fa-trash-alt"></i>
</a>
