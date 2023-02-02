<?php 

$plan->min = ($plan->currency == "USD") ? round($plan->min,2) : $plan->min;
$plan->max = ($plan->currency == "USD") ? round($plan->max,2) : $plan->max;


?>
<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    @include('include.a_css')
    <!-- Page Title  -->
    <title>{{ config("app.name") }} Admin</title>
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('include.a_sidebar')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('include.a_topbar')
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                  <div class="container-fluid">
                   <div class="nk-content-inner">
                    <div class="nk-content-body">
                     <div class="components-preview wide-md mx-auto">
                      <div class="nk-block-head nk-block-head-lg wide-sm">
                       <div class="nk-block-head-content">
                        <div class="nk-block-head-sub"><a class="back-to" href="javascript:void(0)" onclick="history.go(-1)"><em class="icon ni ni-arrow-left"></em><span>Back</span></a></div>
                        <h2 class="nk-block-title fw-normal">Edit {{ ucwords($plan->name) }} Investment Plan</h2>
                       </div>
                      </div><!-- .nk-block-head -->
                      <div class="nk-block nk-block-lg">
                       <div class="card card-bordered card-preview">
                        <div class="card-inner">
                         <div class="preview-block">
                          <span class="preview-title-lg overline-title"></span>
                          <div class="">
                           <form class="" method="POST" data-post-type="edit-plan" action="{{ route("admin.edit.plan.view",["id"=>$plan->id]) }}">

                              @csrf
                              <div class="col-sm-12  form-row">
                                @if (!empty($success))
                                <span class="info_box text-success">{{ $success }}</span>
                                @endif
                              </div>

                              <div class="col-sm-12  form-row">
                                @if (!empty($error))
                                <span class="info_box text-danger">{{ $error }}</span>
                                @endif
                              </div>


                            <div class="col-sm-6 col-md-12 mb-2">
                              <div class="form-group">
                               <label class="form-label" for="name">Plan Name</label>
                               <div class="form-control-wrap">
                                <input required="" type="text" name="name" class="form-control" id="name" placeholder="Enter Name" value="{{ !empty(old("name")) ? old("name") : $plan->name   }}">
                               </div>
                               @error('name')
                               <span class="text-danger" id="error_name">{{ $message }}</span>
                               @enderror
                              </div>
                             </div>

                             <div class="col-sm-6 col-md-12 mb-2">
                              <div class="form-group">
                               <label class="form-label" for="min">Plan Minimum Amount</label>
                               <div class="form-control-wrap">
                                <input required="" type="text" name="min" class="form-control" id="min" placeholder="Enter Min" value="{{ !empty(old("min")) ? old("min") : $plan->min   }}">
                               </div>
                               @error('min')
                               <span class="text-danger" id="error_min">{{ $message }}</span>
                               @enderror
                              </div>
                             </div>

                             <div class="col-sm-6 col-md-12 mb-2">
                              <div class="form-group">
                               <label class="form-label" for="max">Plan Maximum Amount</label>
                               <div class="form-control-wrap">
                                <input required="" type="text" name="max" class="form-control" id="max" placeholder="Enter max" value="{{ !empty(old("max")) ? old("max") : $plan->max   }}">
                               </div>
                               @error('max')
                               <span class="text-danger" id="error_max">{{ $message }}</span>
                               @enderror
                              </div>
                             </div>


                             <div class="col-sm-6 col-md-12 mb-2">
                              <div class="form-group">
                               <label class="form-label" for="min">Plan Type</label>
                               <div class="form-control-wrap">
                                <select name="type"  class="form-control">
                                  <option value="" disabled selected>Select</option>
                                  @foreach(config("app.type") as $type) 
                                  <option @if ((old("type") == $type) || ($plan->type == $type) )
                                            selected
                                          @endif 
                                  value="{{ $type }}">{{ str_replace("-"," ",$type) }}</option>
                                  @endforeach
                              </select>
                               </div>
                               @error('type')
                               <span class="text-danger" id="error_type">{{ $message }}</span>
                               @enderror
                              </div>
                             </div>

                             <div class="col-sm-6 col-md-12 mb-2">
                              <div class="form-group">
                               <label class="form-label" for="min">Plan Currency</label>
                               <div class="form-control-wrap">
                                <select name="currency"  class="form-control">
                                  <option value="" disabled selected>Select</option>
                                  @foreach(config("app.currency") as $currency) 
                                  <option @if ((old("currency") == $currency) || ($plan->currency == $currency))
                                            selected
                                          @endif 
                                  value="{{ $currency }}">{{ $currency }}</option>
                                  @endforeach
                              </select>
                               </div>
                               @error('currency')
                               <span class="text-danger" id="error_currency">{{ $message }}</span>
                               @enderror
                              </div>
                             </div>

                             <div class="col-sm-6 col-md-12 mb-2">
                              <div class="form-group">
                               <label class="form-label" for="roi">ROI</label>
                               <div class="form-control-wrap">
                                <input required="" type="text" name="roi" class="form-control" id="roi" placeholder="Enter roi" value="{{ !empty(old("roi")) ? old("roi") : $plan->roi   }}">
                               </div>
                               @error('roi')
                               <span class="text-danger" id="error_roi">{{ $message }}</span>
                               @enderror
                              </div>
                             </div>


                             <div class="col-sm-6 col-md-12 mb-2">
                              <div class="form-group">
                               <label class="form-label" for="duration">Duration in days (example 30 days)</label>
                               <div class="form-control-wrap">
                                <input required="" type="text" name="duration" class="form-control" id="duration" placeholder="Enter duration" value="{{ !empty(old("duration")) ? old("duration") : $plan->duration   }}">
                               </div>
                               @error('duration')
                               <span class="text-danger" id="error_duration">{{ $message }}</span>
                               @enderror
                              </div>
                             </div>

                             <div class="col-sm-6 col-md-12 mb-2">
                              <div class="form-group">
                               <label class="form-label" for="commission">Total Commission in percent (%) (example : 60)</label>
                               <div class="form-control-wrap">
                                <input required="" type="text" name="commission" class="form-control" id="commission" placeholder="Enter commission" value="{{ !empty(old("commission")) ? old("commission") : $plan->commission   }}">
                               </div>
                               @error('commission')
                               <span class="text-danger" id="error_commission">{{ $message }}</span>
                               @enderror
                              </div>
                             </div>

            
                          
                            <div class="col-sm-4 mt-3">
                             <div class="form-group">
                              <div class="form-control-wrap">
                               <button type="submit"  name="edit-plan" style="text-align:center;" class="d-block form-control btn btn-primary " >Edit Investment Plan</button>
                              </div>
                             </div>
                            </div>
            
                           </form>
            
                          </div>
                         </div>
                        </div>
                       </div><!-- .card-preview -->
                      </div><!-- .nk-block -->
                     </div><!-- .nk-block -->
                    </div>
                   </div>
                  </div>
                 </div>
                <!-- content @e -->
                <!-- footer @s -->
                @include('include.a_footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    @include('include.a_scripts')
</body>

</html>