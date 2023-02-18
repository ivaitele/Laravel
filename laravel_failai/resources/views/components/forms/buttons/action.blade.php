
<a href="{{ route($mainRoute . '.show',  $model->id) }}"
   class="waves-effect waves-light btn-small">Show</a>

<a href="{{ route($mainRoute . '.edit',  $model->id) }}"
   data-tooltip="Redaguoti"
   class="tooltipped waves-effect waves-light green btn-small">
    <i class="tiny material-icons">edit</i>
</a>
<form action="{{ route($mainRoute . '.destroy', $model->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" data-tooltip="Šalinti"
            class="tooltipped waves-effect waves-light red btn-small">
        <i class="tiny material-icons">delete</i>
    </button>
</form>

