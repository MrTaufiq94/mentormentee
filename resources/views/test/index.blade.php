{{$mentor->staff->Nama}}

@forelse ($mentor->getStudent as $mentee)
{{$mentee['RKD01_Nomatrik']}}
@empty
No mentee
@endforelse