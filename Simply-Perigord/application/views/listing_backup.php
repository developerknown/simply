<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8"/>
    <link rel="profile" href="/">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
    <title>Property List
    </title>
    <?php $this->load->view("common/header-links.php");?>
  </head>
  <body class="page-template page-template-full-width page-template-full-width-php page page-id-318 mkd-core-1.0 mkdf-social-login-1.0 mkd-re-1.1.1 zuhaus child-child-ver-1.0.0 zuhaus-ver-1.1.1 mkdf-grid-1200 mkdf-sticky-header-on-scroll-up mkdf-dropdown-animate-height mkdf-header-standard mkdf-menu-area-shadow-disable mkdf-menu-area-in-grid-shadow-disable mkdf-menu-area-border-disable mkdf-menu-area-in-grid-border-disable mkdf-woocommerce-columns-3 mkdf-woo-normal-space mkdf-woo-pl-info-below-image mkdf-woo-single-thumb-below-image mkdf-woo-single-has-pretty-photo mkdf-default-mobile-header mkdf-sticky-up-mobile-header wpb-js-composer js-comp-ver-5.4.4 vc_responsive" itemscope itemtype="">
    <div class="mkdf-wrapper">
      <div class="mkdf-wrapper-inner">
        <?php $this->load->view("common/header2");?>
        <div class="mkdf-content" >
          <div class="mkdf-content-inner">
            <div class="mkdf-full-width">
              <div class="mkdf-full-width-inner">
                <div class="mkdf-grid-row">
                  <div class="mkdf-page-content-holder mkdf-grid-col-12">
                    <div class="vc_row wpb_row vc_row-fluid" >
                      <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                          <div class="wpb_wrapper">
                            <div class="mkdf-property-list-holder mkdf-pl-gallery mkdf-pl-layout-standard  mkdf-small-space mkdf-pl-with-map mkdf-pl-with-filter     mkdf-pl-active-filter-hidden mkdf-pl-properties-found mkdf-pl-four-columns mkdf-pl-pag-no-pagination   "  data-type="gallery" data-item-layout="standard" data-number-of-columns="4" data-space-between-items="small" data-number-of-items="20" data-enable-fixed-proportions="no" data-image-proportions="full" data-hide-active-filter="yes" data-order-by="menu_order" data-order="ASC" data-title-tag="h5" data-pagination-type="no-pagination" data-property-slider-on="no" data-enable-loop="yes" data-enable-autoplay="yes" data-slider-speed="5000" data-slider-speed-animation="600" data-enable-navigation="no" data-enable-map="yes" data-enable-filter="yes" data-enable-pagination="no" data-max-num-pages="1" data-next-page="2">
                              <div class="mkdf-property-list-items-part">
                                <div class="mkdf-property-list-filter-part">

                                  <div class="mkdf-filter-row mkdf-filter-section-st">
                                    <div class="mkdf-filter-section mkdf-filter-section-3 mkdf-section-status">
                                      <div class="mkdf-filter-status-holder" data-default-status="" data-status="">
                                        <div class="mkdf-filter-property-icon">
                                          <span aria-hidden="true" class="mkdf-icon-ion-icon ion-ios-compose-outline">
                                          </span>
                                        </div>
                                        <select class="mkdf-filter-statuses">
                                          <option value="">All Properties
                                          </option>
                                          <option  value="24">For Rent
                                          </option>
                                          <option  value="23">For Sale
                                          </option>
                                          <option  value="25">Just Sold
                                          </option>
                                        </select>
                                      </div>
                                    </div>

                                  </div>

                                  <div class="mkdf-filter-row mkdf-filter-section-csp">
                                    <div class="mkdf-filter-section mkdf-filter-section-3 mkdf-section-city">
                                      <div class="mkdf-filter-city-holder" data-default-city="" data-city="">
                                        <label for="mkdf-filter-city">Choose a location
                                        </label>
                                        <div class="mkdf-filter-property-icon">
                                          <span aria-hidden="true" class="mkdf-icon-ion-icon ion-ios-location-outline">
                                          </span>
                                        </div>
                                        <select id="mkdf-filter-city" name="mkdf-filter-city" class="mkdf-filter-cities">
                                          <option value="">All Locations
                                          </option>
                                          <option  value="94">Chicago
                                          </option>
                                          <option  value="49">Miami
                                          </option>
                                          <option  value="48">New York
                                          </option>
                                          <option  value="46">San Diego
                                          </option>
                                          <option  value="47">San Francisco
                                          </option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="mkdf-filter-section mkdf-filter-section-3 mkdf-section-size">
                                      <div class="mkdf-filter-size-holder" data-size-min="" data-size-max="">
                                        <label>Size
                                        </label>
                                        <div class="mkdf-inputs-holder clearfix">
                                          <span class="mkdf-input-min-size">
                                            <input type="text" class="mkdf-min-size" name="mkdf-min-size" placeholder="Min" value="" />
                                            <span class="mkdf-sufix mkdf-min-sufix">sq ft
                                            </span>
                                          </span>
                                          <span class="mkdf-input-max-size">
                                            <input type="text" class="mkdf-max-size" name="mkdf-max-size" placeholder="Max" value="" />
                                            <span class="mkdf-sufix mkdf-max-sufix">sq ft
                                            </span>
                                          </span>
                                        </div>
                                      </div>
                                    </div>          
                                    <div class="mkdf-filter-section mkdf-filter-section-6 mkdf-section-price">
                                      <div class="mkdf-filter-price-holder" data-price-label-setting="$" data-max-price-setting="3500000">
                                        <div class="mkdf-range-slider-response-holder">
                                          <span>Price range: 
                                          </span>
                                          <span id="mkdf-min-price-label">From
                                          </span>
                                          <span id="mkdf-min-price-value" data-min-price="0">$0
                                          </span>
                                          <span id="mkdf-max-price-label">to
                                          </span>
                                          <span id="mkdf-max-price-value" data-max-price="3500000">$3500000
                                          </span>
                                        </div>
                                        <div class="mkdf-range-slider-wrapper">
                                          <div class="mkdf-range-slider">
                                          </div>
                                        </div>
                                      </div>
                                    </div>     
                                  </div>
                                  <div class="mkdf-filter-row mkdf-filter-section-sf">
                                    <div class="mkdf-filter-section mkdf-filter-section-3 mkdf-section-spec">
                                      <div class="mkdf-filter-specification-holder">
                                        <div class="mkdf-quantity-buttons quantity">
                                          <label for="mkdf-specification-bedrooms">Bedrooms
                                          </label>
                                          <span class="mkdf-quantity-wrapper">
                                            <span class="mkdf-spec-quantity-minus icon_minus-06">
                                            </span>
                                            <input type="text" id="mkdf-specification-bedrooms" class="input-text qty text mkdf-spec-quantity-input" data-step="1" data-min="0" data-max="10" name="mkdf-specification-bedrooms" value="0" title="Property bedrooms" size="2" />
                                            <span class="mkdf-spec-quantity-plus icon_plus">
                                            </span>
                                          </span>
                                        </div>
                                        <div class="mkdf-quantity-buttons quantity">
                                          <label for="mkdf-specification-bathrooms">Bathrooms
                                          </label>
                                          <span class="mkdf-quantity-wrapper">
                                            <span class="mkdf-spec-quantity-minus icon_minus-06">
                                            </span>
                                            <input id="mkdf-specification-bathrooms" type="text" class="input-text qty text mkdf-spec-quantity-input" data-step="1" data-min="0" data-max="10" name="mkdf-specification-bathrooms" value="0" title="Property bathrooms" size="2" />
                                            <span class="mkdf-spec-quantity-plus icon_plus">
                                            </span>
                                          </span>
                                        </div>
                                      </div>
                                    </div>          
                                    <div class="mkdf-filter-section mkdf-filter-section-9 mkdf-section-features">
                                      <div class="mkdf-filter-features-holder">
                                        <div class="mkdf-filter-features-wrapper clearfix">
                                          <div class="mkdf-feature-item">
                                            <input type="checkbox"  class="mkdf-feature-cb" data-id="33" id="mkdf-feature-33" name="mkdf-features[]" value="" />
                                            <label class="mkdf-checkbox-label" for="mkdf-feature-33">
                                              <span class="mkdf-label-view">
                                              </span>
                                              <span class="mkdf-label-text">AC &amp; Heating 
                                              </span>
                                            </label>
                                          </div>
                                          <div class="mkdf-feature-item">
                                            <input type="checkbox"  class="mkdf-feature-cb" data-id="37" id="mkdf-feature-37" name="mkdf-features[]" value="" />
                                            <label class="mkdf-checkbox-label" for="mkdf-feature-37">
                                              <span class="mkdf-label-view">
                                              </span>
                                              <span class="mkdf-label-text">Balcony
                                              </span>
                                            </label>
                                          </div>
                                          <div class="mkdf-feature-item">
                                            <input type="checkbox"  class="mkdf-feature-cb" data-id="109" id="mkdf-feature-109" name="mkdf-features[]" value="" />
                                            <label class="mkdf-checkbox-label" for="mkdf-feature-109">
                                              <span class="mkdf-label-view">
                                              </span>
                                              <span class="mkdf-label-text">
                                                Clubhouse                        
                                              </span>
                                            </label>
                                          </div>
                                          <div class="mkdf-feature-item">
                                            <input type="checkbox"  class="mkdf-feature-cb" data-id="44" id="mkdf-feature-44" name="mkdf-features[]" value="" />
                                            <label class="mkdf-checkbox-label" for="mkdf-feature-44">
                                              <span class="mkdf-label-view">
                                              </span>
                                              <span class="mkdf-label-text">Dishwasher 
                                              </span>
                                            </label>
                                          </div>
                                          <div class="mkdf-feature-item">
                                            <input type="checkbox"  class="mkdf-feature-cb" data-id="34" id="mkdf-feature-34" name="mkdf-features[]" value="" />
                                            <label class="mkdf-checkbox-label" for="mkdf-feature-34">
                                              <span class="mkdf-label-view">
                                              </span>
                                              <span class="mkdf-label-text">Elevator
                                              </span>
                                            </label>
                                          </div>
                                          <div class="mkdf-feature-item">
                                            <input type="checkbox"  class="mkdf-feature-cb" data-id="28" id="mkdf-feature-28" name="mkdf-features[]" value="" />
                                            <label class="mkdf-checkbox-label" for="mkdf-feature-28">
                                              <span class="mkdf-label-view">
                                              </span>
                                              <span class="mkdf-label-text">Fitness Center 
                                              </span>
                                            </label>
                                          </div>
                                          <div class="mkdf-feature-item">
                                            <input type="checkbox"  class="mkdf-feature-cb" data-id="45" id="mkdf-feature-45" name="mkdf-features[]" value="" />
                                            <label class="mkdf-checkbox-label" for="mkdf-feature-45">
                                              <span class="mkdf-label-view">
                                              </span>
                                              <span class="mkdf-label-text">Granite tops 
                                              </span>
                                            </label>
                                          </div>
                                          <div class="mkdf-feature-item">
                                            <input type="checkbox"  class="mkdf-feature-cb" data-id="30" id="mkdf-feature-30" name="mkdf-features[]" value="" />
                                            <label class="mkdf-checkbox-label" for="mkdf-feature-30">
                                              <span class="mkdf-label-view">
                                              </span>
                                              <span class="mkdf-label-text">Laundry Facilities
                                              </span>
                                            </label>
                                          </div>
                                          <div class="mkdf-feature-item">
                                            <input type="checkbox"  class="mkdf-feature-cb" data-id="38" id="mkdf-feature-38" name="mkdf-features[]" value="" />
                                            <label class="mkdf-checkbox-label" for="mkdf-feature-38">
                                              <span class="mkdf-label-view">
                                              </span>
                                              <span class="mkdf-label-text">Modern Kitchen
                                              </span>
                                            </label>
                                          </div>
                                          <div class="mkdf-feature-item">
                                            <input type="checkbox"  class="mkdf-feature-cb" data-id="40" id="mkdf-feature-40" name="mkdf-features[]" value="" />
                                            <label class="mkdf-checkbox-label" for="mkdf-feature-40">
                                              <span class="mkdf-label-view">
                                              </span>
                                              <span class="mkdf-label-text">Pet Friendly
                                              </span>
                                            </label>
                                          </div>
                                          <div class="mkdf-feature-item">
                                            <input type="checkbox"  class="mkdf-feature-cb" data-id="27" id="mkdf-feature-27" name="mkdf-features[]" value="" />
                                            <label class="mkdf-checkbox-label" for="mkdf-feature-27">
                                              <span class="mkdf-label-view">
                                              </span>
                                              <span class="mkdf-label-text">Pool 
                                              </span>
                                            </label>
                                          </div>
                                          <div class="mkdf-feature-item">
                                            <input type="checkbox"  class="mkdf-feature-cb" data-id="29" id="mkdf-feature-29" name="mkdf-features[]" value="" />
                                            <label class="mkdf-checkbox-label" for="mkdf-feature-29">
                                              <span class="mkdf-label-view">
                                              </span>
                                              <span class="mkdf-label-text">Spa 
                                              </span>
                                            </label>
                                          </div>
                                          <div class="mkdf-feature-item">
                                            <input type="checkbox"  class="mkdf-feature-cb" data-id="32" id="mkdf-feature-32" name="mkdf-features[]" value="" />
                                            <label class="mkdf-checkbox-label" for="mkdf-feature-32">
                                              <span class="mkdf-label-view">
                                              </span>
                                              <span class="mkdf-label-text">Storage Units
                                              </span>
                                            </label>
                                          </div>
                                          <div class="mkdf-feature-item">
                                            <input type="checkbox"  class="mkdf-feature-cb" data-id="110" id="mkdf-feature-110" name="mkdf-features[]" value="" />
                                            <label class="mkdf-checkbox-label" for="mkdf-feature-110">
                                              <span class="mkdf-label-view">
                                              </span>
                                              <span class="mkdf-label-text">Tennis Court
                                              </span>
                                            </label>
                                          </div>
                                          <div class="mkdf-feature-item">
                                            <input type="checkbox"  class="mkdf-feature-cb" data-id="31" id="mkdf-feature-31" name="mkdf-features[]" value="" />
                                            <label class="mkdf-checkbox-label" for="mkdf-feature-31">
                                              <span class="mkdf-label-view">
                                              </span>
                                              <span class="mkdf-label-text">Valet Parking
                                              </span>
                                            </label>
                                          </div>
                                          <div class="mkdf-feature-item">
                                            <input type="checkbox"  class="mkdf-feature-cb" data-id="35" id="mkdf-feature-35" name="mkdf-features[]" value="" />
                                            <label class="mkdf-checkbox-label" for="mkdf-feature-35">
                                              <span class="mkdf-label-view">
                                              </span>
                                              <span class="mkdf-label-text">Walk-In Closets
                                              </span>
                                            </label>
                                          </div>
                                          <div class="mkdf-feature-item">
                                            <input type="checkbox"  class="mkdf-feature-cb" data-id="36" id="mkdf-feature-36" name="mkdf-features[]" value="" />
                                            <label class="mkdf-checkbox-label" for="mkdf-feature-36">
                                              <span class="mkdf-label-view">
                                              </span>
                                              <span class="mkdf-label-text">Washer/Dryer 
                                              </span>
                                            </label>
                                          </div>
                                          <div class="mkdf-feature-item">
                                            <input type="checkbox"  class="mkdf-feature-cb" data-id="43" id="mkdf-feature-43" name="mkdf-features[]" value="" />
                                            <label class="mkdf-checkbox-label" for="mkdf-feature-43">
                                              <span class="mkdf-label-view">
                                              </span>
                                              <span class="mkdf-label-text">Wi-Fi
                                              </span>
                                            </label>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="mkdf-filter-row mkdf-filter-section-action">
                                    <button type="submit"  class="mkdf-btn mkdf-btn-medium mkdf-btn-solid mkdf-property-filter-button"  >    
                                      <span class="mkdf-btn-text">Filter Results
                                      </span>
                                    </button>
                                    <span class="mkdf-property-query-section">
                                      <button type="submit" style="color: #000000" class="mkdf-btn mkdf-btn-medium mkdf-btn-outline mkdf-btn-custom-hover-color mkdf-property-save-search-button" data-hover-color="#000000" >   
                                        <span class="mkdf-btn-text">Save Search
                                        </span>
                                      </button> 
                                      <span class="mkdf-query-result">
                                      </span>
                                    </span>
                                    <span class="mkdf-reset-filter-section">
                                      <button type="submit"  class="mkdf-btn mkdf-btn-medium mkdf-btn-simple mkdf-btn-icon mkdf-property-filter-reset-button"  >    
                                        <span class="mkdf-btn-text">Reset
                                        </span>    
                                        <span aria-hidden="true" class="mkdf-icon-font-elegant arrow_carrot-right " >
                                        </span>
                                      </button>
                                    </span>        
                                  </div>
                                </div>
                                <div class="mkdf-pl-filter-loading">
                                  <div class="mkdf-pl-loading-bounce1">
                                  </div>
                                  <div class="mkdf-pl-loading-bounce2">
                                  </div>
                                  <div class="mkdf-pl-loading-bounce3">
                                  </div>
                                </div>        
                                <div class="mkdf-pl-inner mkdf-outer-space  clearfix">
                                  <?php
									foreach($all_property As $property) {
									?>
                                  <article class="mkdf-pl-item mkdf-item-space  post-62 property type-property status-publish has-post-thumbnail hentry property-type-apartment property-feature-ac-heating property-feature-dishwasher property-feature-granite-countertops property-feature-laundry-facilities property-feature-modern-kitchen property-feature-pet-friendly property-feature-storage-units property-feature-washerdryer property-status-for-rent property-county-california property-city-san-diego property-neighborhood-mid-city property-tag-comfortable property-tag-cost-effective property-tag-design property-tag-interior property-tag-listing property-tag-modern property-tag-renovated property-tag-upscale" id="805">
                                    <div class="mkdf-pl-item-inner">
                                      <div class="mkdf-item-top-section">
                                        <div class="mkdf-pli-image">
                                          <img width="800" height="800" src="<?php  echo base_url();  ?>admin/uploads/<?php echo $property->image;?>" class="attachment-full size-full wp-post-image" alt="" srcset="<?php  echo base_url();  ?>admin/uploads/<?php echo $property->image;?> 800w, <?php  echo base_url();  ?>admin/uploads/<?php echo $property->image;?> 150w, <?php  echo base_url();  ?>admin/uploads/<?php echo $property->image;?> 300w, <?php  echo base_url();  ?>admin/uploads/<?php echo $property->image;?> 768w, <?php  echo base_url();  ?>admin/uploads/<?php echo $property->image;?> 180w, <?php  echo base_url();  ?>admin/uploads/<?php echo $property->image;?> 550w" sizes="(max-width: 800px) 100vw, 800px" style="height:180px;"/>
                                        </div>  
                                        <div class="mkdf-item-top-section-content">
                                          <div class="mkdf-item-top-section-content-inner">
                                            <div class="mkdf-item-info-top">
                                              <span class="mkdf-property-statuses">
                                                <span class="mkdf-property-status">For Rent
                                                </span>
                                              </span>
                                            </div>
                                            <div class="mkdf-item-info-bottom">
                                              <div class="mkdf-item-info-bottom-left">
                                                <span class="mkdf-property-id">ID 1235
                                                </span>
                                              </div>
                                              <div class="mkdf-item-info-bottom-right">
                                                <span class="mkdf-property-price">
                                                  <span class="mkdf-property-price-label">$
                                                  </span>
                                                  <span class="mkdf-property-price-value">3.100
                                                  </span>
                                                </span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="mkdf-item-bottom-section">
                                        <div class="mkdf-item-bottom-section-content">
                                          <h5 itemprop="name" class="mkdf-pli-title entry-title">
                                            <a itemprop="url" href="#" target="_self"><?php echo ucfirst($property->name);?>
                                            </a>
                                          </h5>        
                                          <div class="mkdf-item-address">
                                            <span class="mkdf-item-city">San Diego
                                            </span>
                                            <span class="mkdf-item-dash">&ndash;
                                            </span>
                                            <span class="mkdf-item-city">California
                                            </span>
                                            <span class="mkdf-item-comma">&#44;
                                            </span>
                                            <span class="mkdf-item-city">US
                                            </span>
                                            <span class="mkdf-item-city">
                                            </span>
                                          </div>
                                          <div class="mkdf-item-info">
                                            <span class="mkdf-item-icon">
                                              <span aria-hidden="true" class="icon_house_alt">
                                              </span>
                                            </span>
                                            <span class="mkdf-item-size">890sq ft
                                            </span>
                                            <span class="mkdf-item-dash">&ndash;
                                            </span>
                                            <span class="mkdf-item-structure">1
                                            </span>
                                            <span class="mkdf-item-dash">&ndash;
                                            </span>
                                            <span class="mkdf-item-accomodation">Furnitured
                                            </span>
                                          </div>
                                        </div>
                                      </div>
                                      <a itemprop="url" class="mkdf-pli-link mkdf-block-drag-link" href="<?php echo base_url();?>details/<?php echo $property->holiday_rental_id;?>" target="_self">
                                      </a>
                                    </div>
                                  </article>
                                  <?php } ?>
                                </div>
                              </div>
                              <div class="mkdf-property-list-map-part" style="top:60px;">
                                <div id="mkdf-re-multiple-map-holder" style="position: relative; overflow: hidden;">
                                  <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                    <div style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;" class="gm-style">
                                      <div style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(), default; touch-action: pan-x pan-y;" tabindex="0">
                                        <div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
                                          <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                              <div style="position: absolute; z-index: 1; transform: matrix(1, 0, 0, 1, -210, -49);">
                                                <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;">
                                                  <div style="width: 256px; height: 256px;">
                                                  </div>
                                                </div>
                                                <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;">
                                                  <div style="width: 256px; height: 256px;">
                                                  </div>
                                                </div>
                                                <div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;">
                                                  <div style="width: 256px; height: 256px;">
                                                  </div>
                                                </div>
                                                <div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;">
                                                  <div style="width: 256px; height: 256px;">
                                                  </div>
                                                </div>
                                                <div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;">
                                                  <div style="width: 256px; height: 256px;">
                                                  </div>
                                                </div>
                                                <div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;">
                                                  <div style="width: 256px; height: 256px;">
                                                  </div>
                                                </div>
                                                <div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;">
                                                  <div style="width: 256px; height: 256px;">
                                                  </div>
                                                </div>
                                                <div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;">
                                                  <div style="width: 256px; height: 256px;">
                                                  </div>
                                                </div>
                                                <div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;">
                                                  <div style="width: 256px; height: 256px;">
                                                  </div>
                                                </div>
                                                <div style="position: absolute; left: -256px; top: -512px; width: 256px; height: 256px;">
                                                  <div style="width: 256px; height: 256px;">
                                                  </div>
                                                </div>
                                                <div style="position: absolute; left: 0px; top: -512px; width: 256px; height: 256px;">
                                                  <div style="width: 256px; height: 256px;">
                                                  </div>
                                                </div>
                                                <div style="position: absolute; left: 256px; top: -512px; width: 256px; height: 256px;">
                                                  <div style="width: 256px; height: 256px;">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;">
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 30;">
                                              <div style="position: absolute; z-index: 1; transform: matrix(1, 0, 0, 1, -210, -49);">
                                                <div style="width: 256px; height: 256px; position: absolute; left: 0px; top: 0px;">
                                                  <canvas width="256" height="256" style="width: 256px; height: 256px; -moz-user-select: none; position: absolute; left: 0px; top: 0px;" draggable="false">
                                                  </canvas>
                                                </div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: -256px; top: 0px;">
                                                </div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: -256px; top: -256px;">
                                                </div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: 0px; top: -256px;">
                                                </div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: 256px; top: -256px;">
                                                </div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: 256px; top: 0px;">
                                                </div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: 256px; top: 256px;">
                                                </div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: 0px; top: 256px;">
                                                </div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: -256px; top: 256px;">
                                                </div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: -256px; top: -512px;">
                                                </div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: 0px; top: -512px;">
                                                </div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: 256px; top: -512px;">
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;">
                                          </div>
                                          <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                                              <div style="position: absolute; z-index: 1; transform: matrix(1, 0, 0, 1, -210, -49);">
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;">
                                                </div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 0px;">
                                                </div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: -256px;">
                                                </div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: -256px;">
                                                </div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: -256px;">
                                                </div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 0px;">
                                                </div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 256px;">
                                                </div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 256px;">
                                                </div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 256px;">
                                                </div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: -512px;">
                                                </div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: -512px;">
                                                </div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: -512px;">
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                            <div style="position: absolute; z-index: 1; transform: matrix(1, 0, 0, 1, -210, -49);">
                                              <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;">
                                                <img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i1!3i3!4i256!2m3!1e0!2sm!3i432136532!3m14!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjZ8cy5lOmd8cC5jOiNmZmU5ZTllOXxwLmw6MTcscy50OjV8cy5lOmd8cC5jOiNmZmY1ZjVmNXxwLmw6MjAscy50OjQ5fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZnxwLmw6MTcscy50OjQ5fHMuZTpnLnN8cC5jOiNmZmZmZmZmZnxwLmw6Mjl8cC53OjAuMixzLnQ6NTB8cy5lOmd8cC5jOiNmZmZmZmZmZnxwLmw6MTgscy50OjUxfHMuZTpnfHAuYzojZmZmZmZmZmZ8cC5sOjE2LHMudDoyfHMuZTpnfHAuYzojZmZmNWY1ZjV8cC5sOjIxLHMudDo0MHxzLmU6Z3xwLmM6I2ZmZGVkZWRlfHAubDoyMSxzLmU6bC50LnN8cC52Om9ufHAuYzojZmZmZmZmZmZ8cC5sOjE2LHMuZTpsLnQuZnxwLnM6MzZ8cC5jOiNmZjMzMzMzM3xwLmw6NDAscy5lOmwuaXxwLnY6b2ZmLHMudDo0fHMuZTpnfHAuYzojZmZmMmYyZjJ8cC5sOjE5LHMudDoxfHMuZTpnLmZ8cC5jOiNmZmZlZmVmZXxwLmw6MjAscy50OjF8cy5lOmcuc3xwLmM6I2ZmZmVmZWZlfHAubDoxN3xwLnc6MS4y!4e0!23i1301875&amp;key=AIzaSyCgtJEzTXlpZPZYFhwuG6THW5kFn1arXcw&amp;token=39951">
                                              </div>
                                              <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;">
                                                <img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i0!3i3!4i256!2m3!1e0!2sm!3i432136532!3m14!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjZ8cy5lOmd8cC5jOiNmZmU5ZTllOXxwLmw6MTcscy50OjV8cy5lOmd8cC5jOiNmZmY1ZjVmNXxwLmw6MjAscy50OjQ5fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZnxwLmw6MTcscy50OjQ5fHMuZTpnLnN8cC5jOiNmZmZmZmZmZnxwLmw6Mjl8cC53OjAuMixzLnQ6NTB8cy5lOmd8cC5jOiNmZmZmZmZmZnxwLmw6MTgscy50OjUxfHMuZTpnfHAuYzojZmZmZmZmZmZ8cC5sOjE2LHMudDoyfHMuZTpnfHAuYzojZmZmNWY1ZjV8cC5sOjIxLHMudDo0MHxzLmU6Z3xwLmM6I2ZmZGVkZWRlfHAubDoyMSxzLmU6bC50LnN8cC52Om9ufHAuYzojZmZmZmZmZmZ8cC5sOjE2LHMuZTpsLnQuZnxwLnM6MzZ8cC5jOiNmZjMzMzMzM3xwLmw6NDAscy5lOmwuaXxwLnY6b2ZmLHMudDo0fHMuZTpnfHAuYzojZmZmMmYyZjJ8cC5sOjE5LHMudDoxfHMuZTpnLmZ8cC5jOiNmZmZlZmVmZXxwLmw6MjAscy50OjF8cy5lOmcuc3xwLmM6I2ZmZmVmZWZlfHAubDoxN3xwLnc6MS4y!4e0!23i1301875&amp;key=AIzaSyCgtJEzTXlpZPZYFhwuG6THW5kFn1arXcw&amp;token=24361">
                                              </div>
                                              <div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;">
                                                <img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i0!3i2!4i256!2m3!1e0!2sm!3i432136532!3m14!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjZ8cy5lOmd8cC5jOiNmZmU5ZTllOXxwLmw6MTcscy50OjV8cy5lOmd8cC5jOiNmZmY1ZjVmNXxwLmw6MjAscy50OjQ5fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZnxwLmw6MTcscy50OjQ5fHMuZTpnLnN8cC5jOiNmZmZmZmZmZnxwLmw6Mjl8cC53OjAuMixzLnQ6NTB8cy5lOmd8cC5jOiNmZmZmZmZmZnxwLmw6MTgscy50OjUxfHMuZTpnfHAuYzojZmZmZmZmZmZ8cC5sOjE2LHMudDoyfHMuZTpnfHAuYzojZmZmNWY1ZjV8cC5sOjIxLHMudDo0MHxzLmU6Z3xwLmM6I2ZmZGVkZWRlfHAubDoyMSxzLmU6bC50LnN8cC52Om9ufHAuYzojZmZmZmZmZmZ8cC5sOjE2LHMuZTpsLnQuZnxwLnM6MzZ8cC5jOiNmZjMzMzMzM3xwLmw6NDAscy5lOmwuaXxwLnY6b2ZmLHMudDo0fHMuZTpnfHAuYzojZmZmMmYyZjJ8cC5sOjE5LHMudDoxfHMuZTpnLmZ8cC5jOiNmZmZlZmVmZXxwLmw6MjAscy50OjF8cy5lOmcuc3xwLmM6I2ZmZmVmZWZlfHAubDoxN3xwLnc6MS4y!4e0!23i1301875&amp;key=AIzaSyCgtJEzTXlpZPZYFhwuG6THW5kFn1arXcw&amp;token=61841">
                                              </div>
                                              <div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;">
                                                <img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i1!3i2!4i256!2m3!1e0!2sm!3i432136532!3m14!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjZ8cy5lOmd8cC5jOiNmZmU5ZTllOXxwLmw6MTcscy50OjV8cy5lOmd8cC5jOiNmZmY1ZjVmNXxwLmw6MjAscy50OjQ5fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZnxwLmw6MTcscy50OjQ5fHMuZTpnLnN8cC5jOiNmZmZmZmZmZnxwLmw6Mjl8cC53OjAuMixzLnQ6NTB8cy5lOmd8cC5jOiNmZmZmZmZmZnxwLmw6MTgscy50OjUxfHMuZTpnfHAuYzojZmZmZmZmZmZ8cC5sOjE2LHMudDoyfHMuZTpnfHAuYzojZmZmNWY1ZjV8cC5sOjIxLHMudDo0MHxzLmU6Z3xwLmM6I2ZmZGVkZWRlfHAubDoyMSxzLmU6bC50LnN8cC52Om9ufHAuYzojZmZmZmZmZmZ8cC5sOjE2LHMuZTpsLnQuZnxwLnM6MzZ8cC5jOiNmZjMzMzMzM3xwLmw6NDAscy5lOmwuaXxwLnY6b2ZmLHMudDo0fHMuZTpnfHAuYzojZmZmMmYyZjJ8cC5sOjE5LHMudDoxfHMuZTpnLmZ8cC5jOiNmZmZlZmVmZXxwLmw6MjAscy50OjF8cy5lOmcuc3xwLmM6I2ZmZmVmZWZlfHAubDoxN3xwLnc6MS4y!4e0!23i1301875&amp;key=AIzaSyCgtJEzTXlpZPZYFhwuG6THW5kFn1arXcw&amp;token=77431">
                                              </div>
                                              <div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;">
                                                <img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i2!3i3!4i256!2m3!1e0!2sm!3i432136532!3m14!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjZ8cy5lOmd8cC5jOiNmZmU5ZTllOXxwLmw6MTcscy50OjV8cy5lOmd8cC5jOiNmZmY1ZjVmNXxwLmw6MjAscy50OjQ5fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZnxwLmw6MTcscy50OjQ5fHMuZTpnLnN8cC5jOiNmZmZmZmZmZnxwLmw6Mjl8cC53OjAuMixzLnQ6NTB8cy5lOmd8cC5jOiNmZmZmZmZmZnxwLmw6MTgscy50OjUxfHMuZTpnfHAuYzojZmZmZmZmZmZ8cC5sOjE2LHMudDoyfHMuZTpnfHAuYzojZmZmNWY1ZjV8cC5sOjIxLHMudDo0MHxzLmU6Z3xwLmM6I2ZmZGVkZWRlfHAubDoyMSxzLmU6bC50LnN8cC52Om9ufHAuYzojZmZmZmZmZmZ8cC5sOjE2LHMuZTpsLnQuZnxwLnM6MzZ8cC5jOiNmZjMzMzMzM3xwLmw6NDAscy5lOmwuaXxwLnY6b2ZmLHMudDo0fHMuZTpnfHAuYzojZmZmMmYyZjJ8cC5sOjE5LHMudDoxfHMuZTpnLmZ8cC5jOiNmZmZlZmVmZXxwLmw6MjAscy50OjF8cy5lOmcuc3xwLmM6I2ZmZmVmZWZlfHAubDoxN3xwLnc6MS4y!4e0!23i1301875&amp;key=AIzaSyCgtJEzTXlpZPZYFhwuG6THW5kFn1arXcw&amp;token=55541">
                                              </div>
                                              <div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;">
                                                <img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i2!3i2!4i256!2m3!1e0!2sm!3i432136532!3m14!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjZ8cy5lOmd8cC5jOiNmZmU5ZTllOXxwLmw6MTcscy50OjV8cy5lOmd8cC5jOiNmZmY1ZjVmNXxwLmw6MjAscy50OjQ5fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZnxwLmw6MTcscy50OjQ5fHMuZTpnLnN8cC5jOiNmZmZmZmZmZnxwLmw6Mjl8cC53OjAuMixzLnQ6NTB8cy5lOmd8cC5jOiNmZmZmZmZmZnxwLmw6MTgscy50OjUxfHMuZTpnfHAuYzojZmZmZmZmZmZ8cC5sOjE2LHMudDoyfHMuZTpnfHAuYzojZmZmNWY1ZjV8cC5sOjIxLHMudDo0MHxzLmU6Z3xwLmM6I2ZmZGVkZWRlfHAubDoyMSxzLmU6bC50LnN8cC52Om9ufHAuYzojZmZmZmZmZmZ8cC5sOjE2LHMuZTpsLnQuZnxwLnM6MzZ8cC5jOiNmZjMzMzMzM3xwLmw6NDAscy5lOmwuaXxwLnY6b2ZmLHMudDo0fHMuZTpnfHAuYzojZmZmMmYyZjJ8cC5sOjE5LHMudDoxfHMuZTpnLmZ8cC5jOiNmZmZlZmVmZXxwLmw6MjAscy50OjF8cy5lOmcuc3xwLmM6I2ZmZmVmZWZlfHAubDoxN3xwLnc6MS4y!4e0!23i1301875&amp;key=AIzaSyCgtJEzTXlpZPZYFhwuG6THW5kFn1arXcw&amp;token=93021">
                                              </div>
                                              <div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;">
                                                <img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i2!3i4!4i256!2m3!1e0!2sm!3i432136532!3m14!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjZ8cy5lOmd8cC5jOiNmZmU5ZTllOXxwLmw6MTcscy50OjV8cy5lOmd8cC5jOiNmZmY1ZjVmNXxwLmw6MjAscy50OjQ5fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZnxwLmw6MTcscy50OjQ5fHMuZTpnLnN8cC5jOiNmZmZmZmZmZnxwLmw6Mjl8cC53OjAuMixzLnQ6NTB8cy5lOmd8cC5jOiNmZmZmZmZmZnxwLmw6MTgscy50OjUxfHMuZTpnfHAuYzojZmZmZmZmZmZ8cC5sOjE2LHMudDoyfHMuZTpnfHAuYzojZmZmNWY1ZjV8cC5sOjIxLHMudDo0MHxzLmU6Z3xwLmM6I2ZmZGVkZWRlfHAubDoyMSxzLmU6bC50LnN8cC52Om9ufHAuYzojZmZmZmZmZmZ8cC5sOjE2LHMuZTpsLnQuZnxwLnM6MzZ8cC5jOiNmZjMzMzMzM3xwLmw6NDAscy5lOmwuaXxwLnY6b2ZmLHMudDo0fHMuZTpnfHAuYzojZmZmMmYyZjJ8cC5sOjE5LHMudDoxfHMuZTpnLmZ8cC5jOiNmZmZlZmVmZXxwLmw6MjAscy50OjF8cy5lOmcuc3xwLmM6I2ZmZmVmZWZlfHAubDoxN3xwLnc6MS4y!4e0!23i1301875&amp;key=AIzaSyCgtJEzTXlpZPZYFhwuG6THW5kFn1arXcw&amp;token=18061">
                                              </div>
                                              <div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;">
                                                <img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i1!3i4!4i256!2m3!1e0!2sm!3i432136532!3m14!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjZ8cy5lOmd8cC5jOiNmZmU5ZTllOXxwLmw6MTcscy50OjV8cy5lOmd8cC5jOiNmZmY1ZjVmNXxwLmw6MjAscy50OjQ5fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZnxwLmw6MTcscy50OjQ5fHMuZTpnLnN8cC5jOiNmZmZmZmZmZnxwLmw6Mjl8cC53OjAuMixzLnQ6NTB8cy5lOmd8cC5jOiNmZmZmZmZmZnxwLmw6MTgscy50OjUxfHMuZTpnfHAuYzojZmZmZmZmZmZ8cC5sOjE2LHMudDoyfHMuZTpnfHAuYzojZmZmNWY1ZjV8cC5sOjIxLHMudDo0MHxzLmU6Z3xwLmM6I2ZmZGVkZWRlfHAubDoyMSxzLmU6bC50LnN8cC52Om9ufHAuYzojZmZmZmZmZmZ8cC5sOjE2LHMuZTpsLnQuZnxwLnM6MzZ8cC5jOiNmZjMzMzMzM3xwLmw6NDAscy5lOmwuaXxwLnY6b2ZmLHMudDo0fHMuZTpnfHAuYzojZmZmMmYyZjJ8cC5sOjE5LHMudDoxfHMuZTpnLmZ8cC5jOiNmZmZlZmVmZXxwLmw6MjAscy50OjF8cy5lOmcuc3xwLmM6I2ZmZmVmZWZlfHAubDoxN3xwLnc6MS4y!4e0!23i1301875&amp;key=AIzaSyCgtJEzTXlpZPZYFhwuG6THW5kFn1arXcw&amp;token=2471">
                                              </div>
                                              <div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;">
                                                <img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i0!3i4!4i256!2m3!1e0!2sm!3i432136532!3m14!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjZ8cy5lOmd8cC5jOiNmZmU5ZTllOXxwLmw6MTcscy50OjV8cy5lOmd8cC5jOiNmZmY1ZjVmNXxwLmw6MjAscy50OjQ5fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZnxwLmw6MTcscy50OjQ5fHMuZTpnLnN8cC5jOiNmZmZmZmZmZnxwLmw6Mjl8cC53OjAuMixzLnQ6NTB8cy5lOmd8cC5jOiNmZmZmZmZmZnxwLmw6MTgscy50OjUxfHMuZTpnfHAuYzojZmZmZmZmZmZ8cC5sOjE2LHMudDoyfHMuZTpnfHAuYzojZmZmNWY1ZjV8cC5sOjIxLHMudDo0MHxzLmU6Z3xwLmM6I2ZmZGVkZWRlfHAubDoyMSxzLmU6bC50LnN8cC52Om9ufHAuYzojZmZmZmZmZmZ8cC5sOjE2LHMuZTpsLnQuZnxwLnM6MzZ8cC5jOiNmZjMzMzMzM3xwLmw6NDAscy5lOmwuaXxwLnY6b2ZmLHMudDo0fHMuZTpnfHAuYzojZmZmMmYyZjJ8cC5sOjE5LHMudDoxfHMuZTpnLmZ8cC5jOiNmZmZlZmVmZXxwLmw6MjAscy50OjF8cy5lOmcuc3xwLmM6I2ZmZmVmZWZlfHAubDoxN3xwLnc6MS4y!4e0!23i1301875&amp;key=AIzaSyCgtJEzTXlpZPZYFhwuG6THW5kFn1arXcw&amp;token=117952">
                                              </div>
                                              <div style="position: absolute; left: -256px; top: -512px; width: 256px; height: 256px;">
                                                <img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i0!3i1!4i256!2m3!1e0!2sm!3i432136532!3m14!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjZ8cy5lOmd8cC5jOiNmZmU5ZTllOXxwLmw6MTcscy50OjV8cy5lOmd8cC5jOiNmZmY1ZjVmNXxwLmw6MjAscy50OjQ5fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZnxwLmw6MTcscy50OjQ5fHMuZTpnLnN8cC5jOiNmZmZmZmZmZnxwLmw6Mjl8cC53OjAuMixzLnQ6NTB8cy5lOmd8cC5jOiNmZmZmZmZmZnxwLmw6MTgscy50OjUxfHMuZTpnfHAuYzojZmZmZmZmZmZ8cC5sOjE2LHMudDoyfHMuZTpnfHAuYzojZmZmNWY1ZjV8cC5sOjIxLHMudDo0MHxzLmU6Z3xwLmM6I2ZmZGVkZWRlfHAubDoyMSxzLmU6bC50LnN8cC52Om9ufHAuYzojZmZmZmZmZmZ8cC5sOjE2LHMuZTpsLnQuZnxwLnM6MzZ8cC5jOiNmZjMzMzMzM3xwLmw6NDAscy5lOmwuaXxwLnY6b2ZmLHMudDo0fHMuZTpnfHAuYzojZmZmMmYyZjJ8cC5sOjE5LHMudDoxfHMuZTpnLmZ8cC5jOiNmZmZlZmVmZXxwLmw6MjAscy50OjF8cy5lOmcuc3xwLmM6I2ZmZmVmZWZlfHAubDoxN3xwLnc6MS4y!4e0!23i1301875&amp;key=AIzaSyCgtJEzTXlpZPZYFhwuG6THW5kFn1arXcw&amp;token=99321">
                                              </div>
                                              <div style="position: absolute; left: 0px; top: -512px; width: 256px; height: 256px;">
                                                <img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i1!3i1!4i256!2m3!1e0!2sm!3i432136532!3m14!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjZ8cy5lOmd8cC5jOiNmZmU5ZTllOXxwLmw6MTcscy50OjV8cy5lOmd8cC5jOiNmZmY1ZjVmNXxwLmw6MjAscy50OjQ5fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZnxwLmw6MTcscy50OjQ5fHMuZTpnLnN8cC5jOiNmZmZmZmZmZnxwLmw6Mjl8cC53OjAuMixzLnQ6NTB8cy5lOmd8cC5jOiNmZmZmZmZmZnxwLmw6MTgscy50OjUxfHMuZTpnfHAuYzojZmZmZmZmZmZ8cC5sOjE2LHMudDoyfHMuZTpnfHAuYzojZmZmNWY1ZjV8cC5sOjIxLHMudDo0MHxzLmU6Z3xwLmM6I2ZmZGVkZWRlfHAubDoyMSxzLmU6bC50LnN8cC52Om9ufHAuYzojZmZmZmZmZmZ8cC5sOjE2LHMuZTpsLnQuZnxwLnM6MzZ8cC5jOiNmZjMzMzMzM3xwLmw6NDAscy5lOmwuaXxwLnY6b2ZmLHMudDo0fHMuZTpnfHAuYzojZmZmMmYyZjJ8cC5sOjE5LHMudDoxfHMuZTpnLmZ8cC5jOiNmZmZlZmVmZXxwLmw6MjAscy50OjF8cy5lOmcuc3xwLmM6I2ZmZmVmZWZlfHAubDoxN3xwLnc6MS4y!4e0!23i1301875&amp;key=AIzaSyCgtJEzTXlpZPZYFhwuG6THW5kFn1arXcw&amp;token=114911">
                                              </div>
                                              <div style="position: absolute; left: 256px; top: -512px; width: 256px; height: 256px;">
                                                <img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i2!3i1!4i256!2m3!1e0!2sm!3i432136532!3m14!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjZ8cy5lOmd8cC5jOiNmZmU5ZTllOXxwLmw6MTcscy50OjV8cy5lOmd8cC5jOiNmZmY1ZjVmNXxwLmw6MjAscy50OjQ5fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZnxwLmw6MTcscy50OjQ5fHMuZTpnLnN8cC5jOiNmZmZmZmZmZnxwLmw6Mjl8cC53OjAuMixzLnQ6NTB8cy5lOmd8cC5jOiNmZmZmZmZmZnxwLmw6MTgscy50OjUxfHMuZTpnfHAuYzojZmZmZmZmZmZ8cC5sOjE2LHMudDoyfHMuZTpnfHAuYzojZmZmNWY1ZjV8cC5sOjIxLHMudDo0MHxzLmU6Z3xwLmM6I2ZmZGVkZWRlfHAubDoyMSxzLmU6bC50LnN8cC52Om9ufHAuYzojZmZmZmZmZmZ8cC5sOjE2LHMuZTpsLnQuZnxwLnM6MzZ8cC5jOiNmZjMzMzMzM3xwLmw6NDAscy5lOmwuaXxwLnY6b2ZmLHMudDo0fHMuZTpnfHAuYzojZmZmMmYyZjJ8cC5sOjE5LHMudDoxfHMuZTpnLmZ8cC5jOiNmZmZlZmVmZXxwLmw6MjAscy50OjF8cy5lOmcuc3xwLmM6I2ZmZmVmZWZlfHAubDoxN3xwLnc6MS4y!4e0!23i1301875&amp;key=AIzaSyCgtJEzTXlpZPZYFhwuG6THW5kFn1arXcw&amp;token=130501">
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;" class="gm-style-pbc">
                                          <p class="gm-style-pbt">
                                          </p>
                                        </div>
                                        <div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;">
                                          <div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;">
                                            </div>
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;">
                                            </div>
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;">
                                              <div class="mkdf-cluster-marker" style="background-image: url(&quot;&quot;); background-position: 0px 0px; height: 60px; line-height: 60px; width: 50px; text-align: center; cursor: pointer; top: -20.3942px; left: -133.109px; color: black; position: absolute; font-size: 12px; font-family: Arial, sans-serif; font-weight: bold;">
                                                <div class="mkdf-cluster-marker-inner">
                                                  <span class="mkdf-cluster-marker-number">8
                                                  </span>
                                                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="594.657px" height="832.35px" viewBox="0 0 594.657 832.35" enable-background="new 0 0 594.657 832.35" xml:space="preserve">
                                                    <path fill="#FFCD0A" d="M507.572,87.086C451.414,30.928,376.748,0,297.329,0S143.244,30.928,87.086,87.086S0,217.91,0,297.33c0,37.328,8.104,75.127,24.773,115.561c13.006,31.545,31.131,64.504,57.041,103.725l82.887,125.467l113.352,180.572c4.189,6.676,11.396,10.66,19.276,10.66c7.881,0,15.087-3.984,19.276-10.66l113.319-180.521l82.919-125.518c25.911-39.221,44.035-72.18,57.041-103.725c16.67-40.434,24.772-78.232,24.772-115.561C594.657,217.91,563.729,143.244,507.572,87.086z" class="pin-color">
                                                    </path>
                                                  </svg>
                                                </div>
                                              </div>
                                              <div class="mkdf-cluster-marker" style="background-image: url(&quot;&quot;); background-position: 0px 0px; height: 60px; line-height: 60px; width: 50px; text-align: center; cursor: pointer; top: -86.0312px; left: 34.2211px; color: black; position: absolute; font-size: 12px; font-family: Arial, sans-serif; font-weight: bold;">
                                                <div class="mkdf-cluster-marker-inner">
                                                  <span class="mkdf-cluster-marker-number">4
                                                  </span>
                                                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="594.657px" height="832.35px" viewBox="0 0 594.657 832.35" enable-background="new 0 0 594.657 832.35" xml:space="preserve">
                                                    <path fill="#FFCD0A" d="M507.572,87.086C451.414,30.928,376.748,0,297.329,0S143.244,30.928,87.086,87.086S0,217.91,0,297.33c0,37.328,8.104,75.127,24.773,115.561c13.006,31.545,31.131,64.504,57.041,103.725l82.887,125.467l113.352,180.572c4.189,6.676,11.396,10.66,19.276,10.66c7.881,0,15.087-3.984,19.276-10.66l113.319-180.521l82.919-125.518c25.911-39.221,44.035-72.18,57.041-103.725c16.67-40.434,24.772-78.232,24.772-115.561C594.657,217.91,563.729,143.244,507.572,87.086z" class="pin-color">
                                                    </path>
                                                  </svg>
                                                </div>
                                              </div>
                                              <div class="mkdf-cluster-marker" style="background-image: url(&quot;&quot;); background-position: 0px 0px; height: 60px; line-height: 60px; width: 50px; text-align: center; cursor: pointer; top: -77.4361px; left: 112.299px; color: black; position: absolute; font-size: 12px; font-family: Arial, sans-serif; font-weight: bold;">
                                                <div class="mkdf-cluster-marker-inner">
                                                  <span class="mkdf-cluster-marker-number">4
                                                  </span>
                                                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="594.657px" height="832.35px" viewBox="0 0 594.657 832.35" enable-background="new 0 0 594.657 832.35" xml:space="preserve">
                                                    <path fill="#FFCD0A" d="M507.572,87.086C451.414,30.928,376.748,0,297.329,0S143.244,30.928,87.086,87.086S0,217.91,0,297.33c0,37.328,8.104,75.127,24.773,115.561c13.006,31.545,31.131,64.504,57.041,103.725l82.887,125.467l113.352,180.572c4.189,6.676,11.396,10.66,19.276,10.66c7.881,0,15.087-3.984,19.276-10.66l113.319-180.521l82.919-125.518c25.911-39.221,44.035-72.18,57.041-103.725c16.67-40.434,24.772-78.232,24.772-115.561C594.657,217.91,563.729,143.244,507.572,87.086z" class="pin-color">
                                                    </path>
                                                  </svg>
                                                </div>
                                              </div>
                                              <div class="mkdf-cluster-marker" style="background-image: url(&quot;&quot;); background-position: 0px 0px; height: 60px; line-height: 60px; width: 50px; text-align: center; cursor: pointer; top: 25.202px; left: 76.7903px; color: black; position: absolute; font-size: 12px; font-family: Arial, sans-serif; font-weight: bold;">
                                                <div class="mkdf-cluster-marker-inner">
                                                  <span class="mkdf-cluster-marker-number">4
                                                  </span>
                                                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="594.657px" height="832.35px" viewBox="0 0 594.657 832.35" enable-background="new 0 0 594.657 832.35" xml:space="preserve">
                                                    <path fill="#FFCD0A" d="M507.572,87.086C451.414,30.928,376.748,0,297.329,0S143.244,30.928,87.086,87.086S0,217.91,0,297.33c0,37.328,8.104,75.127,24.773,115.561c13.006,31.545,31.131,64.504,57.041,103.725l82.887,125.467l113.352,180.572c4.189,6.676,11.396,10.66,19.276,10.66c7.881,0,15.087-3.984,19.276-10.66l113.319-180.521l82.919-125.518c25.911-39.221,44.035-72.18,57.041-103.725c16.67-40.434,24.772-78.232,24.772-115.561C594.657,217.91,563.729,143.244,507.572,87.086z" class="pin-color">
                                                    </path>
                                                  </svg>
                                                </div>
                                              </div>
                                            </div>
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;">
                                              <div style="z-index: -202; cursor: pointer; display: none; touch-action: none;">
                                                <div style="width: 30px; height: 27px; overflow: hidden; position: absolute;">
                                                  <img style="position: absolute; left: 0px; top: 0px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none; width: 90px; height: 27px;" alt="" src="<?php  echo base_url();  ?>assets/images/undo_poly.png" draggable="false">
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <iframe aria-hidden="true" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: medium none;" src="about:blank" frameborder="0">
                                      </iframe>
                                      <div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
                                        <a style="position: static; overflow: visible; float: none; display: inline;" target="_blank" rel="noopener" href="https://maps.google.com/maps?ll=34.220054,-98.172029&amp;z=3&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" title="Click to see this area on Google Maps">
                                          <div style="width: 66px; height: 26px; cursor: pointer;">
                                            <img style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" alt="" src="<?php  echo base_url();  ?>assets/images/google_white5.png" draggable="false">
                                          </div>
                                        </a>
                                      </div>
                                      <div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 107px; top: 116px;">
                                        <div style="padding: 0px 0px 10px; font-size: 16px;">Map Data
                                        </div>
                                        <div style="font-size: 13px;">Map data �2018 Google, INEGI
                                        </div>
                                        <div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;">
                                          <img style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" alt="" src=
                                               <?php  echo base_url();  ?>assets/images/mapcnt6.png" draggable="false">
                                        </div>
                                      </div>
                                      <div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 71px; bottom: 0px; width: 150px;">
                                        <div draggable="false" style="-moz-user-select: none; height: 14px; line-height: 14px;" class="gm-style-cc">
                                          <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                            <div style="width: 1px;">
                                            </div>
                                            <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;">
                                            </div>
                                          </div>
                                          <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                            <a style="text-decoration: none; cursor: pointer; display: none;">Map Data
                                            </a>
                                            <span>Map data �2018 Google, INEGI
                                            </span>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;">
                                        <div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data �2018 Google, INEGI
                                        </div>
                                      </div>
                                      <div class="gmnoprint gm-style-cc" style="z-index: 1000001; -moz-user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;" draggable="false">
                                        <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                          <div style="width: 1px;">
                                          </div>
                                          <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;">
                                          </div>
                                        </div>
                                        <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                          <a style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);" href="" target="_blank" rel="noopener">Terms of Use
                                          </a>
                                        </div>
                                      </div>
                                      <button style="background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; margin: 10px; padding: 0px; position: absolute; cursor: pointer; -moz-user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; top: 0px; right: 0px;" draggable="false" title="Toggle fullscreen view" aria-label="Toggle fullscreen view" type="button" class="gm-control-active gm-fullscreen-control">
                                        <img style="height: 18px; width: 18px; padding: 8px 3px 10px; margin-top: 3px;" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%20018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A">
                                        <img style="height: 18px; width: 18px; padding: 8px 3px 10px; margin-top: 3px;" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A">
                                        <img style="height: 18px; width: 18px; padding: 8px 3px 10px; margin-top: 3px;" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A">
                                      </button>
                                      <div draggable="false" style="-moz-user-select: none; height: 14px; line-height: 14px; display: none; position: absolute; right: 0px; bottom: 0px;" class="gm-style-cc">
                                        <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                          <div style="width: 1px;">
                                          </div>
                                          <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;">
                                          </div>
                                        </div>
                                        <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                          <a target="_blank" rel="noopener" title="Report errors in the road map or imagery to Google" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;" href="https://www.google.com/maps/@34.2200539,-98.172029,3z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3">Report a map error
                                          </a>
                                        </div>
                                      </div>
                                      <div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" style="margin: 10px; -moz-user-select: none; position: absolute; bottom: 167px; right: 40px;" draggable="false" controlwidth="40" controlheight="153">
                                        <div class="gmnoprint" style="position: absolute; left: 0px; top: 72px;" controlwidth="40" controlheight="81">
                                          <div draggable="false" style="-moz-user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 40px; height: 81px;">
                                            <button style="background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; display: block; border: 0px none; margin: 0px; padding: 0px; position: relative; cursor: pointer; -moz-user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;" draggable="false" title="Zoom in" aria-label="Zoom in" type="button" class="gm-control-active">
                                              <img style="height: 18px; width: 18px; padding: 9px 11px 13px;" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23666%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A">
                                              <img style="height: 18px; width: 18px; padding: 9px 11px 13px;" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23333%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A">
                                              <img style="height: 18px; width: 18px; padding: 9px 11px 13px;" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23111%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A">
                                            </button>
                                            <div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); top: 0px;">
                                            </div>
                                            <button style="background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; display: block; border: 0px none; margin: 0px; padding: 0px; position: relative; cursor: pointer; -moz-user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;" draggable="false" title="Zoom out" aria-label="Zoom out" type="button" class="gm-control-active">
                                              <img style="height: 18px; width: 18px; padding: 13px 11px 9px;" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A">
                                              <img style="height: 18px; width: 18px; padding: 13px 11px 9px;" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A">
                                              <img style="height: 18px; width: 18px; padding: 13px 11px 9px;" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A">
                                            </button>
                                          </div>
                                        </div>
                                        <div class="gm-svpc" style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; width: 40px; height: 40px; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: none; position: absolute; left: 0px; top: 0px;" controlwidth="40" controlheight="40">
                                          <div style="position: absolute;">
                                          </div>
                                          <div style="position: absolute;">
                                            <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2223%22%20height%3D%2238%22%20viewBox%3D%220%200%2023%2038%22%3E%0A%3Cpath%20d%3D%22M16.6%2C38.1h-5.5l-0.2-2.9-0.2%2C2.9h-5.5L5%2C25.3l-0.8%2C2a1.53%2C1.53%2C0%2C0%2C1-1.9.9l-1.2-.4a1.58%2C1.58%2C0%2C0%2C1-1-1.9v-0.1c0.3-.9%2C3.1-11.2%2C3.1-11.2a2.66%2C2.66%2C0%2C0%2C1%2C2.3-2l0.6-.5a6.93%2C6.93%2C0%2C0%2C1%2C4.7-12%2C6.8%2C6.8%2C0%2C0%2C1%2C4.9%2C2%2C7%2C7%2C0%2C0%2C1%2C2%2C4.9%2C6.65%2C6.65%2C0%2C0%2C1-2.2%2C5l0.7%2C0.5a2.78%2C2.78%2C0%2C0%2C1%2C2.4%2C2s2.9%2C11.2%2C2.9%2C11.3a1.53%2C1.53%2C0%2C0%2C1-.9%2C1.9l-1.3.4a1.63%2C1.63%2C0%2C0%2C1-1.9-.9l-0.7-1.8-0.1%2C12.7h0Zm-3.6-2h1.7L14.9%2C20.3l1.9-.3%2C2.4%2C6.3%2C0.3-.1c-0.2-.8-0.8-3.2-2.8-10.9a0.63%2C0.63%2C0%2C0%2C0-.6-0.5h-0.6l-1.1-.9h-1.9l-0.3-2a4.83%2C4.83%2C0%2C0%2C0%2C3.5-4.7A4.78%2C4.78%200%200%2C0%2011%202.3H10.8a4.9%2C4.9%2C0%2C0%2C0-1.4%2C9.6l-0.3%2C2h-1.9l-1%2C.9h-0.6a0.74%2C0.74%2C0%2C0%2C0-.6.5c-2%2C7.5-2.7%2C10-3%2C10.9l0.3%2C0.1%2C2.5-6.3%2C1.9%2C0.3%2C0.2%2C15.8h1.6l0.6-8.4a1.52%2C1.52%2C0%2C0%2C1%2C1.5-1.4%2C1.5%2C1.5%2C0%2C0%2C1%2C1.5%2C1.4l0.9%2C8.4h0Zm-10.9-9.6h0Zm17.5-.1h0Z%22%20style%3D%22fill%3A%23333%3Bopacity%3A0.7%3Bisolation%3Aisolate%22%2F%3E%0A%3Cpath%20d%3D%22M5.9%2C13.6l1.1-.9h7.8l1.2%2C0.9%22%20style%3D%22fill%3A%23ce592c%22%2F%3E%0A%3Cellipse%20cx%3D%2210.9%22%20cy%3D%2213.1%22%20rx%3D%222.7%22%20ry%3D%220.3%22%20style%3D%22fill%3A%23ce592c%3Bopacity%3A0.5%3Bisolation%3Aisolate%22%2F%3E%0A%3Cpath%20d%3D%22M20.6%2C26.1l-2.9-11.3a1.71%2C1.71%2C0%2C0%2C0-1.6-1.2H5.7a1.69%2C1.69%2C0%2C0%2C0-1.5%2C1.3l-3.1%2C11.3a0.61%2C0.61%2C0%2C0%2C0%2C.3.7l1.1%2C0.4a0.61%2C0.61%2C0%2C0%2C0%2C.7-0.3l2.7-6.7%2C0.2%2C16.8h3.6l0.6-9.3a0.47%2C0.47%2C0%2C0%2C1%2C.44-0.5h0.06c0.4%2C0%2C.4.2%2C0.5%2C0.5l0.6%2C9.3h3.6L15.7%2C20.3l2.5%2C6.6a0.52%2C0.52%2C0%2C0%2C0%2C.66.31h0l1.2-.4a0.57%2C0.57%2C0%2C0%2C0%2C.5-0.7h0Z%22%20style%3D%22fill%3A%23fdbf2d%22%2F%3E%0A%3Cpath%20d%3D%22M7%2C13.6l3.9%2C6.7%2C3.9-6.7%22%20style%3D%22fill%3A%23cf572e%3Bopacity%3A0.6%3Bisolation%3Aisolate%22%2F%3E%0A%3Ccircle%20cx%3D%2210.9%22%20cy%3D%227%22%20r%3D%225.9%22%20style%3D%22fill%3A%23fdbf2d%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="width: 18px; height: 30px; padding: 5px 11px;" aria-label="Street View Pegman Control">
                                            <img src="data:image/svg+xml,%3Csvg%20width%3D%2224px%22%20height%3D%2238px%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20viewBox%3D%220%200%2024%2038%22%3E%0A%3Cpath%20d%3D%22M22%2C26.6l-2.9-11.3a2.78%2C2.78%2C0%2C0%2C0-2.4-2l-0.7-.5a6.82%2C6.82%2C0%2C0%2C0%2C2.2-5%2C6.9%2C6.9%2C0%2C0%2C0-13.8%2C0%2C7%2C7%2C0%2C0%2C0%2C2.2%2C5.1l-0.6.5a2.55%2C2.55%2C0%2C0%2C0-2.3%2C2s-3%2C11.1-3%2C11.2v0.1a1.58%2C1.58%2C0%2C0%2C0%2C1%2C1.9l1.2%2C0.4a1.63%2C1.63%2C0%2C0%2C0%2C1.9-.9l0.8-2%2C0.2%2C12.8h11.3l0.2-12.6%2C0.7%2C1.8a1.54%2C1.54%2C0%2C0%2C0%2C1.5%2C1%2C1.09%2C1.09%2C0%2C0%2C0%2C.5-0.1l1.3-.4a1.85%2C1.85%2C0%2C0%2C0%2C.7-2h0Zm-1.2.9-1.2.4a0.61%2C0.61%2C0%2C0%2C1-.7-0.3l-2.5-6.6-0.2%2C16.8h-9.4L6.6%2C21l-2.7%2C6.7a0.52%2C0.52%2C0%2C0%2C1-.66.31h0l-1.1-.4a0.52%2C0.52%2C0%2C0%2C1-.31-0.66v0l3.1-11.3a1.69%2C1.69%2C0%2C0%2C1%2C1.5-1.3h0.2l1-.9h2.3a5.9%2C5.9%2C0%2C1%2C1%2C3.2%2C0h2.3l1.1%2C0.9h0.2a1.71%2C1.71%2C0%2C0%2C1%2C1.6%2C1.2l2.9%2C11.3a0.84%2C0.84%2C0%2C0%2C1-.4.7h0Z%22%20style%3D%22fill%3A%23333%3Bfill-opacity%3A0.2%22%2F%3E%22%0A%3C%2Fsvg%3E%0A%0A" style="display: none; width: 18px; height: 30px; padding: 5px 11px;" aria-label="Pegman is on top of the Map">
                                            <img style="display: none; width: 32px; height: 40px; padding-top: 2px; padding-right: 6px;" src="data:image/svg+xml,%3Csvg%20width%3D%2240px%22%20height%3D%2250px%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20viewBox%3D%220%200%2040%2050%22%3E%0A%3Cpath%20d%3D%22M34.00%2C-30.40l-2.9-11.3a2.78%2C2.78%2C0%2C0%2C0-2.4-2l-0.7-.5a6.82%2C6.82%2C0%2C0%2C0%2C2.2-5%2C6.9%2C6.9%2C0%2C0%2C0-13.8%2C0%2C7%2C7%2C0%2C0%2C0%2C2.2%2C5.1l-0.6.5a2.55%2C2.55%2C0%2C0%2C0-2.3%2C2s-3%2C11.1-3%2C11.2v0.1a1.58%2C1.58%2C0%2C0%2C0%2C1%2C1.9l1.2%2C0.4a1.63%2C1.63%2C0%2C0%2C0%2C1.9-.9l0.8-2%2C0.2%2C12.8h11.3l0.2-12.6%2C0.7%2C1.8a1.54%2C1.54%2C0%2C0%2C0%2C1.5%2C1%2C1.09%2C1.09%2C0%2C0%2C0%2C.5-0.1l1.3-.4a1.85%2C1.85%2C0%2C0%2C0%2C.7-2h0Zm-1.2.9-1.2.4a0.61%2C0.61%2C0%2C0%2C1-.7-0.3l-2.5-6.6-0.2%2C16.8h-9.4L18.60%2C-36.00l-2.7%2C6.7a0.52%2C0.52%2C0%2C0%2C1-.66.31h0l-1.1-.4a0.52%2C0.52%2C0%2C0%2C1-.31-0.66v0l3.1-11.3a1.69%2C1.69%2C0%2C0%2C1%2C1.5-1.3h0.2l1-.9h2.3a5.9%2C5.9%2C0%2C1%2C1%2C3.2%2C0h2.3l1.1%2C0.9h0.2a1.71%2C1.71%2C0%2C0%2C1%2C1.6%2C1.2l2.9%2C11.3a0.84%2C0.84%2C0%2C0%2C1-.4.7h0Zm1.2%2C59.1-2.9-11.3a2.78%2C2.78%2C0%2C0%2C0-2.4-2l-0.7-.5a6.82%2C6.82%2C0%2C0%2C0%2C2.2-5%2C6.9%2C6.9%2C0%2C0%2C0-13.8%2C0%2C7%2C7%2C0%2C0%2C0%2C2.2%2C5.1l-0.6.5a2.55%2C2.55%2C0%2C0%2C0-2.3%2C2s-3%2C11.1-3%2C11.2v0.1a1.58%2C1.58%2C0%2C0%2C0%2C1%2C1.9l1.2%2C0.4a1.63%2C1.63%2C0%2C0%2C0%2C1.9-.9l0.8-2%2C0.2%2C12.8h11.3l0.2-12.6%2C0.7%2C1.8a1.54%2C1.54%2C0%2C0%2C0%2C1.5%2C1%2C1.09%2C1.09%2C0%2C0%2C0%2C.5-0.1l1.3-.4a1.85%2C1.85%2C0%2C0%2C0%2C.7-2h0Zm-1.2.9-1.2.4a0.61%2C0.61%2C0%2C0%2C1-.7-0.3l-2.5-6.6-0.2%2C16.8h-9.4L18.60%2C24.00l-2.7%2C6.7a0.52%2C0.52%2C0%2C0%2C1-.66.31h0l-1.1-.4a0.52%2C0.52%2C0%2C0%2C1-.31-0.66v0l3.1-11.3a1.69%2C1.69%2C0%2C0%2C1%2C1.5-1.3h0.2l1-.9h2.3a5.9%2C5.9%2C0%2C1%2C1%2C3.2%2C0h2.3l1.1%2C0.9h0.2a1.71%2C1.71%2C0%2C0%2C1%2C1.6%2C1.2l2.9%2C11.3a0.84%2C0.84%2C0%2C0%2C1-.4.7h0Z%22%20style%3D%22fill%3A%23333%3Bfill-opacity%3A0.2%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M15.40%2C38.80h-4a1.64%2C1.64%2C0%2C0%2C1-1.4-1.1l-3.1-8a0.9%2C0.9%2C0%2C0%2C1-.5.1l-1.4.1a1.62%2C1.62%2C0%2C0%2C1-1.6-1.4l-1.1-13.1%2C1.6-1.3a6.87%2C6.87%2C0%2C0%2C1-3-4.6A7.14%2C7.14%200%200%2C1%202%204a7.6%2C7.6%2C0%2C0%2C1%2C4.7-3.1%2C7.14%2C7.14%2C0%2C0%2C1%2C5.5%2C1.1%2C7.28%2C7.28%2C0%2C0%2C1%2C2.3%2C9.6l2.1-.1%2C0.1%2C1c0%2C0.2.1%2C0.5%2C0.1%2C0.8a2.41%2C2.41%2C0%2C0%2C1%2C1%2C1s1.9%2C3.2%2C2.8%2C4.9c0.7%2C1.2%2C2.1%2C4.2%2C2.8%2C5.9a2.1%2C2.1%2C0%2C0%2C1-.8%2C2.6l-0.6.4a1.63%2C1.63%2C0%2C0%2C1-1.5.2l-0.6-.3a8.93%2C8.93%2C0%2C0%2C0%2C.5%2C1.3%2C7.91%2C7.91%2C0%2C0%2C0%2C1.8%2C2.6l0.6%2C0.3v4.6l-4.5-.1a7.32%2C7.32%2C0%2C0%2C1-2.5-1.5l-0.4%2C3.6h0Zm-10-19.2%2C3.5%2C9.8%2C2.9%2C7.5h1.6V35l-1.9-9.4%2C3.1%2C5.4a8.24%2C8.24%2C0%2C0%2C0%2C3.8%2C3.8h2.1v-1.4a14%2C14%2C0%2C0%2C1-2.2-3.1%2C44.55%2C44.55%2C0%2C0%2C1-2.2-8l-1.3-6.3%2C3.2%2C5.6c0.6%2C1.1%2C2.1%2C3.6%2C2.8%2C4.9l0.6-.4c-0.8-1.6-2.1-4.6-2.8-5.8-0.9-1.7-2.8-4.9-2.8-4.9a0.54%2C0.54%2C0%2C0%2C0-.4-0.3l-0.7-.1-0.1-.7a4.33%2C4.33%2C0%2C0%2C0-.1-0.5l-5.3.3%2C2.2-1.9a4.3%2C4.3%2C0%2C0%2C0%2C.9-1%2C5.17%2C5.17%2C0%2C0%2C0%2C.8-4%2C5.67%2C5.67%2C0%2C0%2C0-2.2-3.4%2C5.09%2C5.09%2C0%2C0%2C0-4-.8%2C5.67%2C5.67%2C0%2C0%2C0-3.4%2C2.2%2C5.17%2C5.17%2C0%2C0%2C0-.8%2C4%2C5.67%2C5.67%2C0%2C0%2C0%2C2.2%2C3.4%2C3.13%2C3.13%2C0%2C0%2C0%2C1%2C.5l1.6%2C0.6-3.2%2C2.6%2C1%2C11.5h0.4l-0.3-8.2h0Z%22%20style%3D%22fill%3A%23333%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M3.35%2C15.90l1.1%2C12.5a0.39%2C0.39%2C0%2C0%2C0%2C.36.42l0.14%2C0%2C1.4-.1a0.66%2C0.66%2C0%2C0%2C0%2C.5-0.4l-0.2-3.8-3.3-8.6h0Z%22%20style%3D%22fill%3A%23fdbf2d%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M5.20%2C28.80l1.1-.1a0.66%2C0.66%2C0%2C0%2C0%2C.5-0.4l-0.2-3.8-1.2-3.1Z%22%20style%3D%22fill%3A%23ce592b%3Bfill-opacity%3A0.25%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M21.40%2C35.70l-3.8-1.2-2.7-7.8L12.00%2C15.5l3.4-2.9c0.2%2C2.4%2C2.2%2C14.1%2C3.7%2C17.1%2C0%2C0%2C1.3%2C2.6%2C2.3%2C3.1v2.9m-8.4-8.1-2-.3%2C2.5%2C10.1%2C0.9%2C0.4v-2.9%22%20style%3D%22fill%3A%23e5892b%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M17.80%2C25.40c-0.4-1.5-.7-3.1-1.1-4.8-0.1-.4-0.1-0.7-0.2-1.1l-1.1-2-1.7-1.6s0.9%2C5%2C2.4%2C7.1a19.12%2C19.12%2C0%2C0%2C0%2C1.7%2C2.4h0Z%22%20style%3D%22fill%3A%23cf572e%3Bopacity%3A0.6%3Bisolation%3Aisolate%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M14.40%2C37.80h-3a0.43%2C0.43%2C0%2C0%2C1-.4-0.4l-3-7.8-1.7-4.8-3-9%2C8.9-.4s2.9%2C11.3%2C4.3%2C14.4c1.9%2C4.1%2C3.1%2C4.7%2C5%2C5.8h-3.2s-4.1-1.2-5.9-7.7a0.59%2C0.59%2C0%2C0%2C0-.6-0.4%2C0.62%2C0.62%2C0%2C0%2C0-.3.7s0.5%2C2.4.9%2C3.6a34.87%2C34.87%2C0%2C0%2C0%2C2%2C6h0Z%22%20style%3D%22fill%3A%23fdbf2d%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M15.40%2C12.70l-3.3%2C2.9-8.9.4%2C3.3-2.7%22%20style%3D%22fill%3A%23ce592b%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M9.10%2C21.10l1.4-6.2-5.9.5%22%20style%3D%22fill%3A%23cf572e%3Bopacity%3A0.6%3Bisolation%3Aisolate%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M12.00%2C13.5a4.75%2C4.75%2C0%2C0%2C1-2.6%2C1.1c-1.5.3-2.9%2C0.2-2.9%2C0s1.1-.6%2C2.7-1%22%20style%3D%22fill%3A%23bb3d19%22%3E%3C%2Fpath%3E%0A%3Ccircle%20cx%3D%227.92%22%20cy%3D%228.19%22%20r%3D%226.3%22%20style%3D%22fill%3A%23fdbf2d%22%3E%3C%2Fcircle%3E%0A%3Cpath%20d%3D%22M4.70%2C13.60a6.21%2C6.21%2C0%2C0%2C0%2C8.4-1.9v-0.1a8.89%2C8.89%2C0%2C0%2C1-8.4%2C2h0Z%22%20style%3D%22fill%3A%23ce592b%3Bfill-opacity%3A0.25%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M21.20%2C27.20l0.6-.4a1.09%2C1.09%2C0%2C0%2C0%2C.4-1.3c-0.7-1.5-2.1-4.6-2.8-5.8-0.9-1.7-2.8-4.9-2.8-4.9a1.6%2C1.6%2C0%2C0%2C0-2.17-.65l-0.23.15a1.68%2C1.68%2C0%2C0%2C0-.4%2C2.1s2.3%2C3.9%2C3.1%2C5.3c0.6%2C1%2C2.1%2C3.7%2C2.9%2C5.1a0.94%2C0.94%2C0%2C0%2C0%2C1.24.49l0.16-.09h0Z%22%20style%3D%22fill%3A%23fdbf2d%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M19.40%2C19.80c-0.9-1.7-2.8-4.9-2.8-4.9a1.6%2C1.6%2C0%2C0%2C0-2.17-.65l-0.23.15-0.3.3c1.1%2C1.5%2C2.9%2C3.8%2C3.9%2C5.4%2C1.1%2C1.8%2C2.9%2C5%2C3.8%2C6.7l0.1-.1a1.09%2C1.09%2C0%2C0%2C0%2C.4-1.3%2C57.67%2C57.67%2C0%2C0%2C0-2.7-5.6h0Z%22%20style%3D%22fill%3A%23ce592b%3Bfill-opacity%3A0.25%22%3E%3C%2Fpath%3E%0A%3C%2Fsvg%3E%0A" aria-label="Street View Pegman Control">
                                          </div>
                                        </div>
                                        <div class="gmnoprint" controlwidth="40" controlheight="40" style="display: none; position: absolute;">
                                          <div draggable="false" style="-moz-user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; width: 40px; height: 40px;">
                                            <button style="background: rgb(255, 255, 255) none repeat scroll 0% 0%; display: none; border: 0px none; margin: 0px 0px 32px; padding: 0px; position: relative; cursor: pointer; -moz-user-select: none; width: 40px; height: 40px; top: 0px; left: 0px; overflow: hidden;" draggable="false" title="Rotate map 90 degrees" aria-label="Rotate map 90 degrees" type="button" class="gm-control-active">
                                              <img style="height: 28px; width: 28px; margin: 6px;" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A">
                                              <img style="height: 28px; width: 28px; margin: 6px;" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A">
                                              <img style="height: 28px; width: 28px; margin: 6px;" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A">
                                            </button>
                                            <button style="background: rgb(255, 255, 255) none repeat scroll 0% 0%; display: block; border: 0px none; margin: 0px; padding: 0px; position: relative; cursor: pointer; -moz-user-select: none; width: 40px; height: 40px; top: 0px; left: 0px; overflow: hidden;" draggable="false" title="Tilt map" aria-label="Tilt map" type="button" class="gm-tilt gm-control-active">
                                              <img style="width: 18px; height: 16px; margin: 12px 11px;" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A">
                                              <img style="width: 18px; height: 16px; margin: 12px 11px;" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A">
                                              <img style="width: 18px; height: 16px; margin: 12px 11px;" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A">
                                            </button>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="gmnoprint" style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; left: 0px; top: 0px;">
                                        <div style="float: left; position: relative;" class="gm-style-mtc">
                                          <div role="button" tabindex="0" title="Show street map" aria-label="Show street map" aria-pressed="true" style="direction: ltr; overflow: hidden; text-align: center; height: 40px; display: table-cell; vertical-align: middle; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -moz-user-select: none; font-size: 18px; background-color: rgb(255, 255, 255); padding: 0px 17px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; min-width: 36px; font-weight: 500;" draggable="false">Map
                                          </div>
                                          <div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; position: absolute; left: 0px; top: 40px; text-align: left; display: none;">
                                            <div style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -moz-user-select: none; font-size: 18px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;" draggable="false" title="Show street map with terrain">
                                              <span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;">
                                                <div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;">
                                                  <img style="position: absolute; left: -52px; top: -44px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;" alt="" src="<?php  echo base_url();  ?>assets/images/imgs8.png" draggable="false">
                                                </div>
                                              </span>
                                              <label style="vertical-align: middle; cursor: pointer;">Terrain
                                              </label>
                                            </div>
                                          </div>
                                        </div>
                                        <div style="float: left; position: relative;" class="gm-style-mtc">
                                          <div role="button" tabindex="0" title="Show satellite imagery" aria-label="Show satellite imagery" aria-pressed="false" style="direction: ltr; overflow: hidden; text-align: center; height: 40px; display: table-cell; vertical-align: middle; position: relative; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; -moz-user-select: none; font-size: 18px; background-color: rgb(255, 255, 255); padding: 0px 17px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; min-width: 66px; border-left: 0px none;" draggable="false">Satellite
                                          </div>
                                          <div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; position: absolute; right: 0px; top: 40px; text-align: left; display: none;">
                                            <div style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -moz-user-select: none; font-size: 18px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;" draggable="false" title="Show imagery with street names">
                                              <span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;">
                                                <div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;">
                                                  <img style="position: absolute; left: -52px; top: -44px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;" alt="" src="<?php  echo base_url();  ?>assets/images/imgs8.png" draggable="false">
                                                </div>
                                              </span>
                                              <label style="vertical-align: middle; cursor: pointer;">Labels
                                              </label>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> 
          <!-- close div.content_inner -->
        </div>  
        <!-- close div.content -->
        <?php $this->load->view("common/footer");?>
      </div> 
      <!-- close div.mkdf-wrapper-inner  -->
    </div> 
    <!-- close div.mkdf-wrapper -->		
    <?php $this->load->view("common/footer-links");?>
  </body>
</html>
