<form class="search-form" action="{{ route('search') }}" method="get">
  <div class="seach-box">
         <input class="search-input" name="query" value="{{ request()->input('query') }}" type="search" placeholder="Buscar...">
         <button>Buscar</button>
  </div>
</form>
