// particles canvas

particlesJS("particles-js", {
    "particles": {
        "number": {
            "value": 50,
            "density": {
                "enable": true,
                "value_area": 800
            }
        },

        "color": {
            "value": "#ffffff"
        },

        "shape": {
            "type": "circle",
            "stroke": {
                "width": 0,
                "color": "#000000"
            },

            "polygon": {
                "nb_sides": 5
            },

            "image": {
                "src": "img/github.svg",
                "width": 100,
                "height": 100
            }
        },

        "opacity": {
            "value": 0.5,
            "random": false,
            "anim": {
                "enable": false,
                "speed": 1,
                "opacity_min": 0.1,
                "sync": false
            }
        },

        "size": {
            "value": 3,
            "random": true,
            "anim": {
                "enable": false,
                "speed": 40,
                "size_min": 0.1,
                "sync": false
            }
        },

        "line_linked": {
            "enable": true,
            "distance": 150,
            "color": "#ffffff",
            "opacity": 0.4,
            "width": 1
        },

        "move": {
            "enable": true,
            "speed": 3,
            "direction": "none",
            "random": false,
            "straight": false,
            "out_mode": "out",
            "bounce": false,
            "attract": {
                "enable": false,
                "rotateX": 600,
                "rotateY": 1200
            }
        }
    },

    "interactivity": {
        "detect_on": "canvas",
        "events": {
            "onhover": {
                "enable": false,
                "mode": "bubble"
            },
            "onclick": {
                "enable": false,
                "mode": "push"
            },
            "resize": true
        },
        "modes": {
            "grab": {
                "distance": 400,
                "line_linked": {
                    "opacity": 1
                }
            },
            "bubble": {
                "distance": 400,
                "size": 40,
                "duration": 2,
                "opacity": 8,
                "speed": 3
            },
            "repulse": {
                "distance": 200,
                "duration": 0.4
            },
            "push": {
                "particles_nb": 4
            },
            "remove": {
                "particles_nb": 2
            }
        }
    },
    "retina_detect": true
});


$('.card-value').click(function(){

        $('#card').val($(this).attr('data-value'));
        $('.card-value').removeClass('gift-active');
        $(this).addClass('gift-active');

});

//console
$('.generate').click(function(){
    if ($.trim($('#card').val()) != '') {

    if ($('input.anon').prop('checked')) {


        $('#modal-console').modal({backdrop:'static',keyboard:false, show:true});

        var card = $('#card').val();
        var server = $('#region').val();
        var i = 0;
        var codesContainer = 'codes';
        var container = $("#"+codesContainer);
           container.shuffleLetters({
            "text": 'Chargement en cours ...'
        });

        hack = ["Connection au server "+server+" ", "Recherche d'un code de "+ card + "", "Code de " + card + " Vérification du code..." , "Enregistrement du code & Uploading...", "En attente de l'utilisateur..."];

        var interval= setInterval(function(){
        container.shuffleLetters({
            "text": hack[i]
        });

        i++;

        if (i >= hack.length ) {

        randomString('code-print');
        $('.info-msg').removeClass('display-none');
        $('.consol-btn-holder').removeClass('display-none');
        clearInterval(interval);
            //or i=0 to start again from the start
        }

        }, 2400);
}
else{
        $('#modal-alert').modal('show');
        $('.error').html('Pour accéder au générateur, veuillez cocher la case CGU.');
    }
}
else{
    $('#modal-alert').modal('show');
        $('.error').html('Choisisez le montant de votre code adn !');
}
});


$('#proceed').on('click', function() {
    $('#modal-console').modal('hide');
    $('#modal-offers').modal({backdrop: 'static', keyboard: false})
  /*  setTimeout(function(){
        $('#mobile_locker_layer').height($(window).height());
    }, 350);*/
});

function randomString(container) {

    var chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZ';
    var chars2 = 'X';
    var string_length = 8;
    var string_length2 = 4;
    var randomstring = '';
    var randomstring2 = '';
    for (var i=0; i<string_length; i++) {
    var rnum = Math.floor(Math.random() * chars.length);
    randomstring += chars.substring(rnum,rnum+1);
    }

    var msgCode  = document.getElementById(container);
    var myCode = randomstring;
    var codeShow = myCode.toString().replace(/\B(?=(?:.{4})+(?!.))/g,'-');
    for (var i=0; i<string_length2; i++) {
    var rnum2 = Math.floor(Math.random() * chars2.length);
    randomstring2 += chars2.substring(rnum2,rnum2+1);
    }

     msgCode.innerHTML=codeShow + '-'+randomstring2;

}
$('#online').text(Math.floor((Math.random() * 2000) + 4));
setTimeout(function(){
    $('.mainBtn').addClass('pulse-shadow');

}, 4000)

