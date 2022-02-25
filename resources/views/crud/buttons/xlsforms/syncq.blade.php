@if ($crud->hasAccess('update'))
	<a href="{{ backpack_url("sync-questions/$entry->kobo_id") }}" class="btn btn-sm btn-success btn-icon bnt-rounded" data-button-type="sync"><i class="la la-globe"></i></a>
@endif