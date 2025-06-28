/**
 * Inicialización y manejo del formulario RSVP
 */

// Variables globales del RSVP
let rsvpState = {
    currentStep: 1,
    selectedGuest: '',
    guestList: [],
    rsvpData: {
        ceremony: {},
        reception: {},
        welcome: {},
        brunch: {}
    }
};

// Configuración de eventos
const rsvpEvents = [
    { id: 'ceremony', step: 2, name: 'CEREMONY' },
    { id: 'reception', step: 3, name: 'RECEPTION' },
    { id: 'welcome', step: 4, name: 'WELCOME PARTY' },
    { id: 'brunch', step: 5, name: 'FAREWELL BRUNCH' }
];

// Datos de invitados (embebidos directamente)
const invitedGuests = {
    'Cameron Faleri': ['Cameron Faleri', 'Paula Echeverry'],
    'Farisz Faleri': ['Farisz Faleri', 'Farisol Faleri'],
    'Elka Parsa': ['Elka Parsa', 'Cyam Parsa'],
    'Sandra Echeverry': ['Sandra Echeverry', 'Cesar Echeverry', 'Junior Echeverry'],
    'Diego Delgado': ['Diego Delgado'],
    'Ana Niño Melo': ['Ana Niño Melo', 'Giovanna Niño', 'Samantha Niño', 'Gio Niño', 'Ricardo Melo', 'Virginia Melo'],
    'Fanny Melo': ['Fanny Melo', 'Melissa Borda'],
    'Jenny Bisaes Borda': ['Jenny Bisaes Borda', 'Jason Bisaes'],
    'Amparo Melo': ['Amparo Melo'],
    'Jonathan Fajardo': ['Jonathan Fajardo'],
    'Mario Fajardo': ['Mario Fajardo', 'Berlin Fajardo Vado', 'Marilyn Fajardo Vado', 'Grace Fajardo Vado'],
    'Claudia Sandoval': ['Claudia Sandoval', 'Carlos Guerra', 'Sophia Guerra', 'Rosa Diaz de Sandoval'],
    'Ariadna Guerra': ['Ariadna Guerra', 'Santiago Velez Gomez'],
    'Jair Echeverry': ['Jair Echeverry', 'Luisa Echeverry', 'Catalina Echeverry'],
    'Angela Echeverry': ['Angela Echeverry', 'Javier Sanabria', 'Maria Alejandra Sanabria Echeverry', 'Ana Maria Sanabria Echeverry'],
    'Ricardo Melo': ['Ricardo Melo', 'Rocio Perez', 'Katy Melo'],
    'Ricardo Andres Melo': ['Ricardo Andres Melo', 'Karen Melo'],
    'Sara Morales': ['Sara Morales', 'Fernando Trujillo', 'Llurani Trujillo', 'Daniela Trujillo'],
    'Melissa Herrera': ['Melissa Herrera', 'Danni Baquero'],
    'Gloria Molano de Bayona': ['Gloria Molano de Bayona', 'Gloria Amparo Santiesteban', 'Hugo Santiesteban'],
    'Estefania Santiesteban': ['Estefania Santiesteban', 'Victor Núñez'],
    'Valentina Santiesteban': ['Valentina Santiesteban'],
    'Ruth Rodriguez': ['Ruth Rodriguez', 'Hernando Rodriguez'],
    'Claudia Rodriguez': ['Claudia Rodriguez'],
    'Leonardo Rodriguez': ['Leonardo Rodriguez'],
    'Marcela Bayona': ['Marcela Bayona'],
    'Ana Lucia Bayona': ['Ana Lucia Bayona'],
    'Nicolas Bayona': ['Nicolas Bayona', 'Miguel Jacobo Bayona'],
    'Eliana Suarez Bayona': ['Eliana Suarez Bayona', 'Jose Vargas Castillo', 'Adriana Sofia Vargas Suarez'],
    'Liliana Suarez Bayona': ['Liliana Suarez Bayona', 'Arturo Romero', 'Daniel Arturo Romero Suarez'],
    'Jaime Hernando Suarez Bayona': ['Jaime Hernando Suarez Bayona', 'Angela Roja', 'Jaime Andres Suarez'],
    'Linda Van Amerongen': ['Linda Van Amerongen', 'Ron Beij'],
    'Cynthia Van Amerongen': ['Cynthia Van Amerongen', 'Tommy Willem'],
    'Lucero Van Amerongen': ['Lucero Van Amerongen'],
    'Guillermo Javier Beltran': ['Guillermo Javier Beltran', 'Liliana Molina', 'Alex Beltran', 'Monique Beltran'],
    'Sandra Margarita Bayona': ['Sandra Margarita Bayona', 'Diego Rojas de la Cruz'],
    'Tania Bayona': ['Tania Bayona', 'Juan Pablo Hernandez'],
    'Daysse Bayona': ['Daysse Bayona'],
    'Leyla Bayona': ['Leyla Bayona', 'German Triana', 'Magdalena Triana Bayona'],
    'Rosario Jaime Triana': ['Rosario Jaime Triana'],
    'German Eduardo Jaime Triana': ['German Eduardo Jaime Triana'],
    'Reynaldo Bayona': ['Reynaldo Bayona'],
    'Ivan Dario Cuello': ['Ivan Dario Cuello', 'Laura Juliana Cuadros Amaya', 'Laura Sofia Cuello', 'Alejandro Cuello Vitamil'],
    'David Cuello': ['David Cuello', 'Natalia Cuello'],
    'Henry Bayona': ['Henry Bayona', 'Leonor Castiblanco'],
    'Paige McDermott': ['Paige McDermott'],
    'Morgan Ritchie': ['Morgan Ritchie'],
    'Betty MaaJaan': ['Betty MaaJaan'],
    'Brian Gonzalez Navarro': ['Brian Gonzalez Navarro'],
    'Soraya Rao': ['Soraya Rao', 'Simi Rao'],
    'Thien Bu': ['Thien Bu'],
    'Dylan Roos': ['Dylan Roos', 'Lindsey Greenland'],
    'Belen Salto': ['Belen Salto', 'Simon Chi'],
    'Keyron Dejbakhsh': ['Keyron Dejbakhsh'],
    'Alexander Isaab': ['Alexander Isaab', 'Rachel Ya'],
    'Guneet Sandhu Chalhal': ['Guneet Sandhu Chalhal', 'Paul Chalhal'],
    'Jagmeet Arora': ['Jagmeet Arora', 'Manpreet Singh Arora'],
    'Adil Mahadkevan': ['Adil Mahadkevan'],
    'Rahul Massoon': ['Rahul Massoon'],
    'Jessica Salguero': ['Jessica Salguero', 'Sandra Salguero', 'Juan Salguero'],
    'Julia Salguero Echeverria': ['Julia Salguero Echeverria', 'Victor Echeverria'],
    'Jessica Aguilar': ['Jessica Aguilar', 'Michael Everett'],
    'Fariba Shaygan': ['Fariba Shaygan', 'Farhad Shaygan', 'Darrah Shaygan', 'Leila Shaygan'],
    'Farhad Abdollahi': ['Farhad Abdollahi', 'Nikkisa Abdollahi', 'Darious Abdollah', 'Aydin Abdollah', 'Zachary Abdollahi'],
    'Easy Amiri': ['Easy Amiri'],
    'Farzad Abdollahi': ['Farzad Abdollahi'],
    'Farideh Faleri': ['Farideh Faleri'],
    'Fada Saleh': ['Fada Saleh', 'Valentina Saleh', 'Reza Saleh', 'Darian Saleh'],
    'Ali Esfandiari': ['Ali Esfandiari', 'Shirley Esfandiari', 'Caitlyn Esfandiari', 'Caleb Esfandiari'],
    'Cyrus Esfandiari': ['Cyrus Esfandiari'],
    'Crystal Esfandiari': ['Crystal Esfandiari'],
    'Farid Faleri': ['Farid Faleri', 'Monaco Faleri', 'Chance Faleri', 'Sherry Faleri'],
    'Zahra Farjam': ['Zahra Farjam', 'Hassan Farjam', 'Babak Farjam'],
    'Faranak Herrera': ['Faranak Herrera', 'Dan Herrera'],
    'Azam Abdollahi': ['Azam Abdollahi', 'Nemat Abdolals'],
    'Bita Karaeian': ['Bita Karaeian', 'Cyb Karaeian'],
    'Afshin Abdollahi': ['Afshin Abdollahi', 'Shirin Abdollahi'],
    'Pantehia Paknejad': ['Pantehia Paknejad', 'Pouria Paknejad'],
    'Amir Hashemian': ['Amir Hashemian', 'Masi Hashemian'],
    'Yasi Hashemian': ['Yasi Hashemian'],
    'Nader Hashemian': ['Nader Hashemian'],
    'Nikki Maghsoudinia': ['Nikki Maghsoudinia', 'Mo Maghsoudinia'],
    'Arianna Collins': ['Arianna Collins', 'Matt Collins'],
    'Karina Maghsoudinia': ['Karina Maghsoudinia'],
    'Kasrina Maghsoudinia': ['Kasrina Maghsoudinia'],
    'Masheed Madani': ['Masheed Madani', 'Saeed Madani'],
    'Farood Min': ['Farood Min', 'Paniz Min'],
    'Abbas Parsa': ['Abbas Parsa', 'Fariba Parsa'],
    'Neda Roghani': ['Neda Roghani', 'Reza Roghani'],
    'Lia Parsa': ['Lia Parsa'],
    'Roma Parsa': ['Roma Parsa'],
    'Roxanne Parsa': ['Roxanne Parsa'],
    'Amin Bina': ['Amin Bina', 'Mariam Bina', 'Layla Bina'],
    'Nickie Hayward': ['Nickie Hayward', 'Will Hayward'],
    'Ferry Hedayati': ['Ferry Hedayati', 'Ghaffar Hedayati'],
    'Bobby Hedayati': ['Bobby Hedayati', 'Mona Hedayati'],
    'Keon Hedayati': ['Keon Hedayati'],
    'Saeed Bastani': ['Saeed Bastani', 'Marjan Bastani'],
    'Partsa Bastani': ['Partsa Bastani'],
    'Melody Bastani': ['Melody Bastani'],
    'Kemi Jahanmr': ['Kemi Jahanmr', 'Samira Jahanmr'],
    'Yassi Jahanmr': ['Yassi Jahanmr'],
    'Sanaz Banisalam': ['Sanaz Banisalam', 'Kayson Banisalam'],
    'Saeed Radmelir': ['Saeed Radmelir', 'Zohra Radmelir'],
    'Samira Rezaei': ['Samira Rezaei', 'Iden Rezaei'],
    'Nazanin Falemi': ['Nazanin Falemi', 'Faraz Falemi'],
    'Azita Mokhtari': ['Azita Mokhtari', 'Kamran Mokhtari'],
    'Mojdeh Baudry': ['Mojdeh Baudry', 'Mojdeh Baudry Guest'],
    'Said Abuthoda': ['Said Abuthoda', 'Kathy Abuthoda'],
    'Roozban Hounhyar': ['Roozban Hounhyar', 'Michelle Hure'],
    'Rafael Clouthier': ['Rafael Clouthier'],
    'Mathias Beeck': ['Mathias Beeck'],
    'Roya Vaziri': ['Roya Vaziri', 'Mo Vaziri', 'Sean Vaziri', 'Shervin Vaziri'],
    'Vicky Azhr': ['Vicky Azhr', 'Ardi Azhr'],
    'Kayson Azhr': ['Kayson Azhr'],
    'Leila Miri': ['Leila Miri'],
    'Kristen Galub': ['Kristen Galub'],
    'Jenny Huang': ['Jenny Huang'],
    'Jessica Fukushima': ['Jessica Fukushima']
};

/**
 * Funciones principales del RSVP
 */
export function initRSVPForm() {
    console.log('🎉 Inicializando formulario RSVP');
    
    // Elementos DOM
    const rsvpContainer = document.getElementById('rsvp-form-container');
    const searchInput = document.getElementById('guest-search');
    const searchResults = document.getElementById('search-results');
    const allergyInput = document.getElementById('allergies');
    const emailInput = document.getElementById('guest-email');
    const closeButton = document.querySelector('.rsvp-form-close');
    
    if (!rsvpContainer) {
        return;
    }
    
    // Event listeners principales
    setupRSVPEventListeners();
    
    // Event listener directo para el botón de cerrar
    if (closeButton) {
        closeButton.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            closeRSVPForm();
        });
    } else {
        console.warn('⚠️ Botón de cerrar no encontrado');
    }
    
    // Búsqueda con Enter en el campo
    if (searchInput) {
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter' || e.keyCode === 13) {
                e.preventDefault();
                findInvitation();
            }
        });
    }
    
}

function setupRSVPEventListeners() {
    // Event listeners mediante delegación de eventos
    document.addEventListener('click', function(e) {
        // Abrir formulario RSVP
        if (e.target.matches('.rsvp-open-btn')) {
            e.preventDefault();
            openRSVPForm();
        }
        
        // Cerrar formulario - verificar tanto el botón como el span interno
        if (e.target.matches('.rsvp-form-close') || e.target.closest('.rsvp-form-close')) {
            e.preventDefault();
            closeRSVPForm();
        }
        
        // Cerrar al hacer click en el overlay de fondo
        if (e.target.matches('#rsvp-form-container')) {
            closeRSVPForm();
        }
        
        // Botón home (cerrar modal)
        if (e.target.matches('.rsvp-home-btn')) {
            closeRSVPForm();
        }
        
        // Botón siguiente
        if (e.target.matches('.rsvp-next-btn')) {
            nextStep();
        }
        
        // Botón anterior
        if (e.target.matches('.rsvp-back-btn')) {
            previousStep();
        }
        
        // Botón buscar invitación
        if (e.target.matches('.rsvp-find-btn')) {
            findInvitation();
        }
    });
}

// Abrir formulario RSVP
function openRSVPForm() {
    const rsvpContainer = document.getElementById('rsvp-form-container');
    
    // Verificar si Bootstrap está disponible
    if (typeof bootstrap !== 'undefined' && bootstrap.Modal) {
        const modal = new bootstrap.Modal(rsvpContainer);
        modal.show();
    } else {
        // Fallback para cuando Bootstrap no esté disponible
        rsvpContainer.style.display = 'block';
        rsvpContainer.classList.add('show');
        document.body.style.overflow = 'hidden';
    }
    showStep(1);
}

// Cerrar formulario RSVP
function closeRSVPForm() {
    const rsvpContainer = document.getElementById('rsvp-form-container');
    
    if (!rsvpContainer) {
        console.error('❌ No se encontró el contenedor RSVP');
        return;
    }
    
    
    // Verificar si Bootstrap está disponible
    if (typeof bootstrap !== 'undefined' && bootstrap.Modal) {
        const modal = bootstrap.Modal.getInstance(rsvpContainer);
        if (modal) {
            modal.hide();
        }
    } else {
        // Fallback para cuando Bootstrap no esté disponible
        rsvpContainer.style.display = 'none';
        rsvpContainer.classList.remove('show');
        document.body.style.overflow = 'auto';
    }
    resetForm();
}

// Resetear formulario
function resetForm() {
    rsvpState.currentStep = 1;
    rsvpState.selectedGuest = '';
    rsvpState.guestList = [];
    rsvpState.rsvpData = {
        ceremony: {},
        reception: {},
        welcome: {},
        brunch: {}
    };
    
    const searchInput = document.getElementById('guest-search');
    const searchResults = document.getElementById('search-results');
    const allergyInput = document.getElementById('allergies');
    const emailInput = document.getElementById('guest-email');
    
    if (searchInput) searchInput.value = '';
    if (searchResults) {
        searchResults.style.display = 'none';
        searchResults.innerHTML = '';
    }
    if (allergyInput) allergyInput.value = '';
    if (emailInput) emailInput.value = '';
}

// Mostrar paso específico
function showStep(step) {
    document.querySelectorAll('.rsvp-form-step').forEach(el => {
        el.classList.remove('active');
    });
    
    const stepElement = document.getElementById(`step-${step}`);
    if (stepElement) {
        stepElement.classList.add('active');
    }
    
    rsvpState.currentStep = step;
    
    // Configurar paso específico
    if (step >= 2 && step <= 5) {
        const event = rsvpEvents.find(e => e.step === step);
        if (event) {
            setupEventStep(event.id);
        }
    } else if (step === 6) {
        setupAdditionalInfoStep();
    }
}

// Búsqueda de invitados
function searchGuests() {
    const searchInput = document.getElementById('guest-search');
    const searchResults = document.getElementById('search-results');
    const query = searchInput.value.toLowerCase().trim();
    
    
    if (query.length < 3) {
        searchResults.style.display = 'none';
        return;
    }
    
    const allMainGuests = Object.keys(invitedGuests);
    let foundMainGuests = new Set(); // Para evitar duplicados
    
    // Buscar coincidencias exactas en nombres principales
    const exactMatches = allMainGuests.filter(name => {
        if (name.toLowerCase() === query) {
            foundMainGuests.add(name);
            return true;
        }
        return false;
    });
    
    // Buscar nombres que empiecen con la consulta
    const startsWithMatches = allMainGuests.filter(name => {
        if (!foundMainGuests.has(name) && name.toLowerCase().startsWith(query)) {
            foundMainGuests.add(name);
            return true;
        }
        return false;
    });
    
    // Buscar nombres que contengan la consulta
    const containsMatches = allMainGuests.filter(name => {
        if (!foundMainGuests.has(name) && name.toLowerCase().includes(query)) {
            foundMainGuests.add(name);
            return true;
        }
        return false;
    });
    
    // Buscar también en la lista de invitados de cada grupo
    allMainGuests.forEach(mainGuest => {
        if (!foundMainGuests.has(mainGuest)) {
            const guestList = invitedGuests[mainGuest];
            const hasMatchingGuest = guestList.some(guest => {
                const guestName = guest.toLowerCase();
                return guestName === query || 
                       guestName.startsWith(query) || 
                       guestName.includes(query);
            });
            if (hasMatchingGuest) {
                foundMainGuests.add(mainGuest);
                containsMatches.push(mainGuest);
            }
        }
    });
    
    // Combinar resultados por prioridad y limitar a 6 resultados máximo
    const matches = [...exactMatches, ...startsWithMatches, ...containsMatches].slice(0, 6);
    
    
    if (matches.length > 0) {
        searchResults.innerHTML = matches.map(name => 
            `<div class="rsvp-search-item cursor-pointer" onclick="selectGuest('${name}')">${name}</div>`
        ).join('');
        searchResults.style.display = 'block';
    } else {
        searchResults.innerHTML = '<div class="rsvp-search-item">No guest found with that name</div>';
        searchResults.style.display = 'block';
    }
}

// Función para buscar invitación desde el botón
function findInvitation() {
    const searchInput = document.getElementById('guest-search');
    const searchResults = document.getElementById('search-results');
    const inputValue = searchInput.value.trim();
    
    if (inputValue.length < 3) {
        alert('Please enter at least 3 characters of your name');
        return;
    }
    
    const query = inputValue.toLowerCase();
    const allMainGuests = Object.keys(invitedGuests);
    let foundMainGuests = new Set(); // Para evitar duplicados
    
    // Buscar coincidencias exactas en nombres principales
    const exactMatches = allMainGuests.filter(name => {
        if (name.toLowerCase() === query) {
            foundMainGuests.add(name);
            return true;
        }
        return false;
    });
    
    // Buscar nombres que empiecen con la consulta
    const startsWithMatches = allMainGuests.filter(name => {
        if (!foundMainGuests.has(name) && name.toLowerCase().startsWith(query)) {
            foundMainGuests.add(name);
            return true;
        }
        return false;
    });
    
    // Buscar nombres que contengan la consulta
    const containsMatches = allMainGuests.filter(name => {
        if (!foundMainGuests.has(name) && name.toLowerCase().includes(query)) {
            foundMainGuests.add(name);
            return true;
        }
        return false;
    });
    
    // Buscar también en la lista de invitados de cada grupo
    allMainGuests.forEach(mainGuest => {
        if (!foundMainGuests.has(mainGuest)) {
            const guestList = invitedGuests[mainGuest];
            const hasMatchingGuest = guestList.some(guest => {
                const guestName = guest.toLowerCase();
                return guestName === query || 
                       guestName.startsWith(query) || 
                       guestName.includes(query);
            });
            if (hasMatchingGuest) {
                foundMainGuests.add(mainGuest);
                containsMatches.push(mainGuest);
            }
        }
    });
    
    // Combinar resultados por prioridad y limitar a 6 resultados máximo
    const matches = [...exactMatches, ...startsWithMatches, ...containsMatches].slice(0, 6);
    
    if (matches.length > 0) {
        searchResults.innerHTML = matches.map(name => 
            `<div class="rsvp-search-item cursor-pointer" onclick="selectGuest('${name}')">${name}</div>`
        ).join('');
        searchResults.style.display = 'block';
    } else {
        searchResults.innerHTML = '<div class="rsvp-search-item">No guest found with that name</div>';
        searchResults.style.display = 'block';
    }
}

// Seleccionar invitado - función global para onclick
window.selectGuest = function(guestName) {
    const searchInput = document.getElementById('guest-search');
    const searchResults = document.getElementById('search-results');
    
    rsvpState.selectedGuest = guestName;
    rsvpState.guestList = invitedGuests[guestName] || [];
    searchInput.value = guestName;
    searchResults.style.display = 'none';
    
    // Inicializar datos RSVP para cada evento
    rsvpState.guestList.forEach(guest => {
        rsvpState.rsvpData.ceremony[guest] = 'pending';
        rsvpState.rsvpData.reception[guest] = 'pending';
        rsvpState.rsvpData.welcome[guest] = 'pending';
        rsvpState.rsvpData.brunch[guest] = 'pending';
    });
    
    showStep(2);
};

// Configurar paso de evento específico
function setupEventStep(eventId) {
    const container = document.getElementById(`guest-list-${eventId}`);
    if (!container) return;
    
    let html = '';
    
    rsvpState.guestList.forEach((guest, index) => {
        html += `
            <div class="rsvp-guest-item" data-guest-index="${index}">
                <div class="row">
                    <div class="col-12 col-xl-5">
                        <div class="rsvp-guest-name fs-xl-7 font-secondary fs-3">${guest}</div>
                    </div>
                    <div class="col-12 col-xl-7">
                        <div class="mb-2">
                            <div class="row">
                                <div class="col-12 col-xl-6 mb-xl-0 mb-2">
                                    <button type="button" class="rsvp-btn w-100 border-1 font-secondary py-2 px-2" data-guest-name="${guest}" data-response="accept" data-event="${eventId}">Accept</button>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <button type="button" class="rsvp-btn rsvp-btn-outline rsvp-btn w-100 border-1 font-secondary bg-white-100 py-2 px-2" data-guest-name="${guest}" data-response="decline" data-event="${eventId}">Decline</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `;
    });
    
    container.innerHTML = html;
    
    // Agregar event listeners a los botones
    const responseButtons = container.querySelectorAll('.rsvp-btn');
    responseButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            const guestName = this.getAttribute('data-guest-name');
            const response = this.getAttribute('data-response');
            const event = this.getAttribute('data-event');
            setGuestResponse(guestName, response, event);
        });
    });
    
    updateEventButtons(eventId);
}

// Configurar paso de información adicional
function setupAdditionalInfoStep() {
    const allergyInput = document.getElementById('allergies');
    const emailInput = document.getElementById('guest-email');
    
    // Solo necesita asegurar que los elementos existen
    if (allergyInput) allergyInput.value = allergyInput.value || '';
    if (emailInput) emailInput.value = emailInput.value || '';
}

// Establecer respuesta del invitado
function setGuestResponse(guestName, response, eventId) {
    rsvpState.rsvpData[eventId][guestName] = response;
    updateEventButtons(eventId);
}

// Actualizar botones de evento específico
function updateEventButtons(eventId) {
    
    const container = document.getElementById(`guest-list-${eventId}`);
    if (!container) return;
    
    // Primero resetear todos los botones del evento
    const allButtons = container.querySelectorAll('.rsvp-btn');
    allButtons.forEach(btn => {
        btn.classList.remove('active');
        btn.style.backgroundColor = '';
        btn.style.color = '';
        
        // Restaurar estilos por defecto
        if (btn.classList.contains('rsvp-btn-outline')) {
            btn.style.backgroundColor = 'transparent';
            btn.style.color = '#767A61';
            btn.style.borderColor = '#767A61';
        } else {
            btn.style.backgroundColor = '#767A61';
            btn.style.color = '#fff';
            btn.style.borderColor = '#767A61';
        }
    });
    
    // Luego marcar los botones seleccionados para este evento
    Object.keys(rsvpState.rsvpData[eventId]).forEach(guest => {
        const response = rsvpState.rsvpData[eventId][guest];
        if (response === 'pending') return;
        
        // Buscar los botones de este invitado para este evento
        const buttons = container.querySelectorAll(`[data-guest-name="${guest}"][data-event="${eventId}"]`);
        
        buttons.forEach(btn => {
            const btnResponse = btn.getAttribute('data-response');
            
            if (btnResponse === response) {
                // Marcar como activo
                btn.classList.add('active');
                btn.style.backgroundColor = '#fff';
                btn.style.color = '#767A61';
                btn.style.borderColor = '#767A61';
                btn.style.opacity = '1';
            } else {
                // Marcar como inactivo
                btn.style.backgroundColor = '#fff';
                btn.style.color = '#767A61';
                btn.style.borderColor = '#767A61';
                btn.style.opacity = '0.7';
            }
        });
    });
}

// Validar si se puede continuar
function canContinue() {
    // Para eventos (pasos 2-5): Siempre se puede continuar (no es obligatorio responder)
    if (rsvpState.currentStep >= 2 && rsvpState.currentStep <= 5) {
        return true;
    }
    // Para información adicional: Solo email es obligatorio
    if (rsvpState.currentStep === 6) {
        const emailInput = document.getElementById('guest-email');
        return emailInput && emailInput.value.trim() !== '';
    }
    return true;
}

// Ir al siguiente paso
function nextStep() {
    if (!canContinue()) {
        alert('Por favor complete todos los campos requeridos');
        return;
    }
    
    if (rsvpState.currentStep === 6) {
        submitRSVP();
    } else {
        showStep(rsvpState.currentStep + 1);
    }
}

// Ir al paso anterior
function previousStep() {
    if (rsvpState.currentStep > 1) {
        showStep(rsvpState.currentStep - 1);
    }
}

// Enviar RSVP
function submitRSVP() {
    const allergyInput = document.getElementById('allergies');
    const emailInput = document.getElementById('guest-email');
    
    // Procesar respuestas finales (pending = accept por defecto)
    const processedData = {};
    Object.keys(rsvpState.rsvpData).forEach(eventId => {
        processedData[eventId] = {};
        Object.keys(rsvpState.rsvpData[eventId]).forEach(guest => {
            // Si no respondió (pending), se asume que va (accept)
            processedData[eventId][guest] = rsvpState.rsvpData[eventId][guest] === 'pending' ? 'accept' : rsvpState.rsvpData[eventId][guest];
        });
    });
    
    const submitData = {
        action: 'submit_rsvp',
        guest_name: rsvpState.selectedGuest,
        guests: processedData,
        allergies: allergyInput.value.trim(),
        email: emailInput.value.trim()
    };
    
    // Mostrar loading
    document.getElementById('step-6').innerHTML = '<div class="rsvp-loading">Enviando...</div>';
    
    // Construir body correctamente
    const formData = new FormData();
    formData.append('action', 'submit_rsvp');
    formData.append('guest_name', rsvpState.selectedGuest);
    formData.append('email', emailInput.value.trim());
    formData.append('allergies', allergyInput.value.trim());
    formData.append('guests', JSON.stringify(processedData));
    
    // Debug: Mostrar lo que se va a enviar
    // for (let [key, value] of formData.entries()) {
    //     console.log(key + ':', value);
    // }
    
    // Debug: Verificar JSON antes de enviar
    const jsonString = JSON.stringify(processedData);
    
    fetch(window.location.href, {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        return response.text(); // Primero como texto para debugging
    })
    .then(text => {
        const data = JSON.parse(text);
        if (data.success) {
            showStep(7);
        } else {
            console.error('❌ Error al enviar RSVP:', data.message);
            alert('Error al enviar RSVP: ' + data.message);
            // Regenerar el paso 6 sin el loading
            showStep(6);
            setupAdditionalInfoStep();
        }
    })
    .catch(error => {
        console.error('❌ Error de conexión:', error);
        // En local, simular éxito para testing
        if (window.location.hostname === 'localhost' || window.location.hostname === '127.0.0.1') {
            alert('MODO LOCAL: RSVP procesado (revisa la consola para ver los datos)');
            showStep(7);
        } else {
            alert('Error al enviar RSVP');
            showStep(6);
        }
    });
} 