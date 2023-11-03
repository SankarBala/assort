   <!--Section Find your home-->
   <section class="section-md section-bottom-0">
       <div class="container position-margin-top">
           <div class="search-form-wrap bg-default container-shadow">
               <h3>Advance Search</h3>
               {{-- <form class="form-variant-1" method="GET" action="{{ route('search') }}" name="search-form"> --}}
               <form class="form-variant-1" name="form1" method="get" action="{{ route('search') }}">
                   <div class="form-wrap">
                       {{-- <label class="form-label" for="select-search-1">Location</label> --}}
                       <select name="project_type_id" class="form-input select-filter" id="select-search-1"
                           data-minimum-results-for-search="Infinity">
                           <option value="0">All Types</option>
                           @foreach ($project_types as $type)
                               <option value="{{ $type->id }}">
                                   {{ $type->name }}
                                   {{ $type->projects->count() !== 0 ? '(' . $type->projects->count() . ')' : '' }}
                               </option>
                           @endforeach
                       </select>
                   </div>
                   <div class="form-wrap">
                       {{-- <label class="form-label" for="select-search-2">Property Status</label> --}}
                       <select name="location_id" class="form-input select-filter" id="select-search-2"
                           data-minimum-results-for-search="Infinity">
                           <option value="0">All Cities </option>
                           @foreach ($locations as $location)
                               <option value="{{ $location->id }}">
                                   {{ $location->name }}
                                   {{ $location->projects->count() !== 0 ? '(' . $location->projects->count() . ')' : '' }}
                               </option>
                           @endforeach
                       </select>
                   </div>
                   <div class="form-wrap">
                       {{-- <label class="form-label" for="select-search-3">Property Type</label> --}}
                       <select name="area_id" class="form-input select-filter" id="select-search-3"
                           data-minimum-results-for-search="Infinity">
                           <option value="0">All Areas</option>
                           @foreach ($areas as $area)
                               <option value="{{ $area->id }}">
                                   {{ $area->name }}
                                   {{ $area->projects->count() !== 0 ? '(' . $area->projects->count() . ')' : '' }}
                               </option>
                           @endforeach
                       </select>
                   </div>

                   <button type="submit" class="form-wrap btn btn-sm btn-sushi btn-min-width-sm">Search</button>

               </form>
           </div>
       </div>
   </section>
