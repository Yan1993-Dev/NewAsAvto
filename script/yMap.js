function initYaMap() {
  var myMap = new ymaps.Map("yamap", {
    center: [53.263619542243866, 50.24],
    zoom: 14,
  });
  myMap.geoObjects
    .add(
      new ymaps.Placemark(
        [53.26379, 50.262271],
        {
          balloonContent: "г. Самара, Алма-Атинская, 87",
        },
        {
          preset: "islands#icon",
          iconColor: "rgb(237, 69, 67)",
        }
      )
    )
    .add(
      new ymaps.Placemark(
        [53.252689, 50.362214],
        {
          balloonContent: "г. Самара, Аэропортовское шоссе, 1Ж",
        },
        {
          preset: "islands#icon",
          iconColor: "rgb(237, 69, 67)",
        }
      )
    )
    .add(
      new ymaps.Placemark(
        [53.13729, 50.179647],
        {
          balloonContent: "г. Самара, Южное шоссе 12А, строение 4",
        },
        {
          preset: "islands#icon",
          iconColor: "rgb(237, 69, 67)",
        }
      )
    )
    .add(
      new ymaps.Placemark(
        [53.578003950614864, 49.41344120138184],
        {
          balloonContent: "пос. Тимофеевка (г.Тольятти), ул. Солнечная, 1А",
        },
        {
          preset: "islands#icon",
          iconColor: "rgb(237, 69, 67)",
        }
      )
    )
    .add(
      new ymaps.Placemark(
        [51.55742, 46.066993],
        {
          balloonContent: "г. Саратов, Соколовая гора, 4",
        },
        {
          preset: "islands#icon",
          iconColor: "rgb(237, 69, 67)",
        }
      )
    );


$(".map .contacts_block li .name").click(function () {
  var item = $(this).parent();
  $(".map .contacts_block li").removeClass("visible");
  item.addClass("visible");
  var center = item.data("center");
  myMap.setCenter([center.lat, center.lng]);
  myMap.setZoom(14, { duration: 100 });
});
}

function initMap(coordinates, center, zoom) {
if (!coordinates)
  coordinates = { lat: 53.263619542243866, lng: 50.26215135698404 };
if (!center) center = { lat: 53.263619542243866, lng: 50.24 };
if (!zoom) zoom = 14;
$(".description .btn").addClass("light");
$(".description .btn:first-child").removeClass("light");
var markerImage = "<?=SITE_TEMPLATE_PATH?>/img/map.png",
  map = new google.maps.Map(document.getElementById("map"), {
    center: window.innerWidth > 576 ? center : coordinates,
    zoom: zoom,
  }),
  marker = new google.maps.Marker({
    position: coordinates,
    map: map,
    icon: markerImage,
  });
}


document.addEventListener('DOMContentLoaded', function(){ 
ymaps.ready(initYaMap);
});