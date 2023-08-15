<button href="javascript:void(0)" type="button" onClick="editFunc({{ $id }})" data-original-title="Edit"
    class="edit btn btn-sm btn-outline-warning edit">
    {{ trans('global.edit') }}
</button>
<a href="javascript:void(0);" id="delete-compnay" onClick="deleteFunc({{ $id }})"
    data-original-title="Delete" class="delete btn btn-sm btn-outline-danger">
    {{ trans('global.delete') }}
</a>
