@foreach($termList as $term)
<a class="badge bg-secondary custom-badge mt-2 term-link text-capitalize" href="/term/{{$term}}">{{str_replace('-', ' ', $term)}}</a>
@endforeach