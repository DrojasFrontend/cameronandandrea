<!-- RSVP Form Modal -->
<div id="rsvp-form-container" class="rsvp-form-container">
    <div class="rsvp-form-modal bg-primary-100 p-xl-5 p-3 bg-white position-relative">
        <button type="button" class="rsvp-form-close btn-close p-0 text-black fs-xl-1 fs-1-medium bg-transparent border-0 position-absolute top-0 end-0 me-3">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="rsvp-form-content">
            <form id="rsvp-form">
                
                <!-- Paso 1: Búsqueda -->
                <div id="step-1" class="rsvp-form-step active">
                    <h2 class="fs-xl-3 text-primary mb-3">CAMERON & ANDREA'S <br> WEDDING</h2>
                    <p class="font-secondary fs-6 text-black">
                        If you're responding for you and a guest (or your family), you'll be able to RSVP for your entire group.
                    </p>
                    <p class="font-secondary fs-6 text-black mb-4">
                        Please enter below your First Name and your Last Name.
                    </p>
                    <input type="text" id="guest-search" class="w-100 border-1 bg-white-100 p-3 mb-3 font-secondary" placeholder="Full name" autocomplete="off">
                    <div id="search-results" class="rsvp-search-item fs-6 font-secondary py-3 cursor-pointer"></div>
                    <button type="button" class="btn btn-secondary rsvp-find-btn w-100 border-0 fs-xl-5-medium fs-6">FIND YOUR INVITATION</button>
                </div>

                <!-- Paso 2: CEREMONY -->
                <div id="step-2" class="rsvp-form-step">
                    <h2 class="fs-xl-3-medium fs-3 text-primary mb-2">CEREMONY</h2>
                    <div class="rsvp-form-event-details">
                        <p class="fs-6 text-black font-secondary mb-1">January 16th, 2026</p>
                        <p class="fs-6 text-black font-secondary mb-1">Patio Republicano</p>
                        <p class="fs-6 text-black font-secondary mb-4">5:00 pm</p>
                    </div>
                    <div id="guest-list-ceremony" class="rsvp-guest-list mt-3">
                        <!-- Se llena dinámicamente con JavaScript -->
                    </div>
                    <div class="rsvp-form-buttons">
                        <div class="row d-flex flex-xl-row flex-column-reverse">
                            <div class="col-12 col-xl-6 mb-xl-0">
                                <button type="button" class="btn btn-primary rsvp-back-btn font-secondary border-1 mx-auto">BACK</button>
                            </div>
                            <div class="col-12 col-xl-6 mb-xl-0 mb-2">
                                <button type="button" class="btn btn-secondary rsvp-next-btn font-secondary border-0 mx-auto">CONTINUE</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Paso 3: RECEPTION -->
                <div id="step-3" class="rsvp-form-step">
                    <h2 class="fs-xl-3-medium fs-3 text-primary mb-2">RECEPTION TO FOLLOW</h2>
                    <div class="rsvp-form-event-details">
                        <p class="fs-6 text-black font-secondary mb-1">January 16th, 2026</p>
                        <p class="fs-6 text-black font-secondary mb-1">La Capilla Ballroom</p>
                        <p class="fs-6 text-black font-secondary mb-1">Following the ceremony</p>
                    </div>
                    <div id="guest-list-reception" class="rsvp-guest-list mt-3">
                        <!-- Se llena dinámicamente con JavaScript -->
                    </div>
                    <div class="rsvp-form-buttons">
                        <div class="row d-flex flex-xl-row flex-column-reverse">
                            <div class="col-12 col-xl-6">
                                <button type="button" class="btn btn-primary rsvp-back-btn font-secondary border-1 mx-auto">BACK</button>
                            </div>
                            <div class="col-12 col-xl-6 mb-xl-0 mb-2">
                                <button type="button" class="btn btn-secondary rsvp-next-btn font-secondary border-0 mx-auto">CONTINUE</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Paso 4: WELCOME PARTY -->
                <div id="step-4" class="rsvp-form-step">
                    <h2 class="fs-xl-3-medium fs-3 text-primary mb-2">WELCOME COCKTAIL</h2>
                    <div class="rsvp-form-event-details">
                        <p class="fs-6 text-black font-secondary mb-1">January 15th, 2026</p>
                        <p class="fs-6 text-black font-secondary mb-1">Baluarte San Francisco Javier</p>
                        <p class="fs-6 text-black font-secondary">6:00 - 10:00 pm</p>
                    </div>
                    <div id="guest-list-welcome" class="rsvp-guest-list mt-3">
                        <!-- Se llena dinámicamente con JavaScript -->
                    </div>
                    <div class="rsvp-form-buttons">
                        <div class="row d-flex flex-xl-row flex-column-reverse">
                            <div class="col-12 col-xl-6">
                                <button type="button" class="btn btn-primary rsvp-back-btn font-secondary border-1 mx-auto">BACK</button>
                            </div>
                            <div class="col-12 col-xl-6 mb-xl-0 mb-2">
                                <button type="button" class="btn btn-secondary rsvp-next-btn font-secondary border-0 mx-auto">CONTINUE</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Paso 5: FAREWELL BRUNCH -->
                <div id="step-5" class="rsvp-form-step">
                    <h2 class="fs-xl-3-medium fs-3 text-primary mb-2">SUNSET CRUISE</h2>
                    <div class="rsvp-form-event-details">
                        <p class="fs-6 text-black font-secondary mb-1">January 17th, 2026</p>
                        <p class="fs-6 text-black font-secondary mb-1">Bonavida</p>
                        <p class="fs-6 text-black font-secondary">5:00 - 8:00 pm</p>
                    </div>
                    <div id="guest-list-brunch" class="rsvp-guest-list mt-3">
                        <!-- Se llena dinámicamente con JavaScript -->
                    </div>
                    <div class="rsvp-form-buttons">
                        <div class="row d-flex flex-xl-row flex-column-reverse">
                            <div class="col-12 col-xl-6">
                                <button type="button" class="btn btn-primary rsvp-back-btn font-secondary border-1 mx-auto">BACK</button>
                            </div>
                            <div class="col-12 col-xl-6 mb-xl-0 mb-2">
                                <button type="button" class="btn btn-secondary rsvp-next-btn font-secondary border-0 mx-auto">CONTINUE</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Paso 6: Información Adicional -->
                <div id="step-6" class="rsvp-form-step">
                    <h2 class="fs-xl-3-medium fs-3 text-primary mb-2">ADDITIONAL INFO</h2>
                    <p class="fs-6 text-black font-secondary mb-1">Tell us if you have any food <br> allergies or restrictions</p>
                    <textarea id="allergies" class="p-3 font-secondary w-100 mb-3" placeholder="Food allergies or restrictions..."></textarea>
                    <input type="email" id="guest-email" class="w-100 font-secondary p-3 mb-3" placeholder="Email address" required>
                    <div class="rsvp-form-buttons">
                        <div class="row d-flex flex-xl-row flex-column-reverse">
                            <div class="col-12 col-xl-6">
                                <button type="button" class="btn btn-primary rsvp-back-btn font-secondary border-1 mx-auto">BACK</button>
                            </div>
                            <div class="col-12 col-xl-6 mb-xl-0 mb-2">
                                <button type="button" class="btn btn-secondary rsvp-next-btn font-secondary border-0 mx-auto">R.S.V.P.</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Paso 7: Agradecimiento -->
                <div id="step-7" class="rsvp-form-step">
                    <div class="rsvp-thank-you">
                        <h3 class="fs-xl-3-medium fs-3 text-primary mb-2">THANKS</h3>
                        <p class="fs-6 text-black font-secondary mb-1 col-xl-8 pe-xl-3">Thank you for confirming your attendance to our wedding. We are very happy to share this special day with you. We will send a copy of your RSVP to your email.</p>
                        <button type="button" class="rsvp-btn rsvp-btn-primary rsvp-home-btn btn btn-primary w-100">BACK TO HOME</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>