@if (Auth::user()->company->nif == null || Auth::user()->company->nis == null || Auth::user()->company->rc == null || Auth::user()->company->ai == null || Auth::user()->company->code == null )

<div class="alert alert-warning mb-0" role="alert">
    <a href="{{ route('companies.edit' , Auth::user()->company->id)}}" class="text-dark"><strong> {{ __('message.Alert!') }}</strong> {{ __('message.Veuillez remplir les champs manquants requis par la loi') }} <strong>(
        @if (Auth::user()->company->nif == null)
            nif,
        @endif

        @if (Auth::user()->company->nis == null)
            nis,
        @endif

        @if (Auth::user()->company->rc == null)
            rc,
        @endif

        @if (Auth::user()->company->ai == null)
            ai,
        @endif

        @if (Auth::user()->company->code == null)
            code,
        @endif


        )</strong>
        {{ __('message.dans profile.') }}</a>
</div>

@endif
