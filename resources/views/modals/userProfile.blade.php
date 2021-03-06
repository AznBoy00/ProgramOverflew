<div id="userProfileModal" class="modal">
        <body>
        <br/>
        <br/>
        <br/>
        <div class="row">
            <div class="column1">
                <div class="slds-scope">
                    <section aria-describedby="modal-content-id-1" aria-labelledby="modal-heading-01" aria-modal="true"
                             class="slds-modal slds-fade-in-open" role="dialog" tabindex="-1">
                        <article class="slds-card" style="Width:40%; margin: 8% auto;">
                            <div class="slds-card__header slds-grid">
                                <button class="closeU slds-button slds-button__icon_left" style="margin-top: -8mm; margin-left: -2mm;">
                                    <svg class="slds-button__icon" aria-hidden="true">
                                        <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#close" xmlns:xlink="http://www.w3.org/1999/xlink" />
                                    </svg>
                                    <span class="slds-assistive-text">Exit User Profile</span>
                                </button>
                                <div style="background-color: rgb(244, 246, 249);">
                                    <div class="slds-text-heading_small slds-text-body_regular slds-text-align_center slds-m-top_medium slds-theme_alert-texture">
                                        <strong>Rank</strong><br/>{{\App\Http\Controllers\ClientControllerHelper::getRank(session()->get('username'))}}<br/></div>
                                </div>
                                <span class="slds-align_absolute-center slds-avatar slds-avatar_circle slds-avatar_large">
                                    <img alt="Person name" src="/assets/images/avatar2.jpg" title="User avatar"/>
                                </span>
                                <div class="slds-text-heading_small slds-text-body_regular slds-text-align_center slds-m-top_medium slds-theme_alert-texture">
                                    <strong>Questions</strong><br/>{{\App\Http\Controllers\ClientControllerHelper::getNumberOfQuestionsForUser(session()->get('username'))}}</div>
                            </div>
                            <div class="slds-media__body">
                                <div class="slds-align_absolute-center">
                                    <div class="slds-split-view_container" style="padding-left: 4cm;">
                                        <dl class="slds-list_horizontal slds-wrap">
                                            <dt class="slds-p-top_xx-large slds-text-align_center slds-text-heading_small slds-item_label slds-text-color_weak slds-truncate"
                                                title="First Label"><strong>Username:</strong>
                                            </dt>
                                            <dd class="slds-p-top_xx-large slds-text-align_left slds-text-heading_small slds-item_detail slds-truncate"
                                                title="Description for first label">{{\App\Http\Controllers\ClientControllerHelper::getUserDataFromDB('username')}}
                                            </dd>
                                            <dt class="slds-text-align_center slds-text-heading_small slds-item_label slds-text-color_weak slds-truncate"
                                                title="Second Label"><strong>Email:</strong>
                                            </dt>
                                            <dd class="slds-text-align_left slds-text-heading_small slds-item_detail slds-truncate"
                                                title="Description for second label">{{\App\Http\Controllers\ClientControllerHelper::getUserDataFromDB('email')}}
                                            </dd>
                                            <dt class="slds-text-align_center slds-text-heading_small slds-item_label slds-text-color_weak slds-truncate"
                                                title="Second Label"><strong>Password:</strong>
                                            </dt>
                                            <dd class="slds-text-align_left slds-text-heading_small slds-item_detail slds-truncate"
                                                title="Description for second label">**********
                                            </dd>
                                        </dl>
                                        <div style="padding: 0.5rem; background-color: rgb(244, 246, 249); padding-left: 10cm;">
                                            <button class="slds-button slds-button_icon slds-button_icon-border-filled" id="editProfileModalButton">
                                                <svg class="slds-button__icon_small slds-button__icon"
                                                     aria-hidden="false">
                                                    <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#edit"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink"/>
                                                </svg>
                                                <span class="slds-assistive-text">Edit user profile</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </section>
                    <div class="slds-backdrop slds-backdrop_open"></div>
                </div>
            </div>
        </div>
        </body>
</div>
<link class="user" href="{{URL::asset('css/salesforce-lightning-design-system-vf.min.css')}}" rel="stylesheet"
      type="text/css">
<link class="user" href="{{URL::asset('css/mainpage.css')}}" rel="stylesheet" type="text/css">
<link class="user" href="{{URL::asset('css/ourstyle.css')}}" rel="stylesheet" type="text/css">
<link rel="icon" type="image/x-icon">
<script src="{{URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js')}}"></script>
<script src="{{URL::asset('js/mainpage.js')}}"></script>
<script src="{{URL::asset('js/editProfile.js')}}"></script>

