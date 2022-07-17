        <div class="col-12">
            <h5 class="p-5 text-center">SECCIÓN DE FIRMAS DE AUTORIZACIÓN</h5>
            <table class="table bg-yellow" style="margin-bottom: 9rem">
              <thead>
                <tr>
                  <th class="text-center" scope="col">ELABORÓ</th>
                  <th class="text-center" scope="col">ELABORÓ</th>
                  <th class="text-center" scope="col">APROBÓ</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                   <td class="text-center">
                      <img src="{{asset('firmas/'.$config->firma1)}}" class="img-card-menu"> <br>
                        {{$config->name1}} <br>
                        Responsable SASISOPA <br>
                  </td>


                  <td class="text-center title-header">
                      <img src="{{asset('firmas/'.$config->firma2)}}" class="img-card-menu"> <br>
                        {{$config->name2}} <br>
                        Responsable SGM <br>
                  </td>

                   <td class="text-center title-header">
                       <img src="{{asset('firmas/'.$config->firma3)}}" class="img-card-menu"> <br>
                       {{$config->name3}} <br>
                       Empresario Gasolinero <br>
                  </td>
                </tr>
              </tbody>
            </table>
        </div>
