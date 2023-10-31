  <section class="call-to-action-box no-padding" style="margin-top:auto; overflow: hidden;">
      <div class="action-style-box advanced_search">
          <div class="row">
              <div class="col-md-12 text-center text-md-left">
                  <div class="container">
                      <br>
                      <h3>Advanced Search</h3>

                      <form name="form1" method="get" action="{{ route('search') }}">

                          <div class="row">
                              <div class="col-md-3">

                                  <select name="project_type_id" class="custom-select mb-3">
                                      <option value="0">All Types</option>
                                      @foreach ($project_types as $type)
                                          <option value="{{ $type->id }}">
                                              {{ $type->name }}
                                              {{ $type->projects->count() !== 0 ? '(' . $type->projects->count() . ')' : '' }}
                                          </option>
                                      @endforeach
                                  </select>

                              </div>
                              <div class="col-md-3">
                                  <select name="location_id" class="custom-select mb-3">
                                      <option value="0">All Cities </option>
                                      @foreach ($locations as $location)
                                          <option value="{{ $location->id }}">
                                              {{ $location->name }}
                                              {{ $location->projects->count() !== 0 ? '(' . $location->projects->count() . ')' : '' }}
                                          </option>
                                      @endforeach

                                  </select>
                              </div>

                              <div class="col-md-3">
                                  <select name="area_id" class="custom-select mb-3">
                                      <option value="0">All Areas</option>
                                      @foreach ($areas as $area)
                                          <option value="{{ $area->id }}">
                                              {{ $area->name }}
                                              {{ $area->projects->count() !== 0 ? '(' . $area->projects->count() . ')' : '' }}
                                          </option>
                                      @endforeach
                                  </select>
                              </div>

                              <div class="col-md-3 text-center text-md-right mt-3 mt-md-0">
                                  <div class="call-to-action-btn">
                                      <input type="submit" class="btn btn-info" />
                                  </div>

                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>

      </div>

  </section>
