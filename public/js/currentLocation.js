var geocoder = new google.maps.Geocoder();
var infoWindow = [];
var marker = [];
var markerData = [
    // マーカーを立てる場所名・緯度・経度
    {
        name: "TAM 東京",
        lat: 35.6954806,
        lng: 139.76325010000005,
    },
    {
        name: "小川町駅",
        lat: 35.6951212,
        lng: 139.76610649999998,
    },
    {
        name: "淡路町駅",
        lat: 35.69496,
        lng: 139.76746000000003,
    },
];

//initmap()の閉じカッコ

// マーカーにクリックイベントを追加
function markerEvent(i) {
    marker[i].addListener("click", function () {
        // マーカーをクリックしたとき
        infoWindow[i].open(map, marker[i]); // 吹き出しの表示
    });
}

function codeAddress(a) {
    var address = a; //引数で受け取った住所aを変数addressに格納

    console.log(geocoder);
    if (geocoder) {
        const results = geocoder.geocode({
            address: address,
            region: "jp",
        });
        var bounds = new google.maps.LatLngBounds();
        for (var r in results) {
            if (results[r].geometry) {
                var latlng = results[r].geometry.location;
                bounds.extend(latlng);
                let lat = latlng.lat();
                let lng = latlng.lng();
                //return文は関数を終了させるので上に移動させた
                console.log("lat:");
                console.log(lat);
                console.log("codeAddressは実行されている");

                return [lat, lng]; //緯度、経度を配列として返す
                //return lat;
                //console.log(a);//リターン文の下だと表示されない
            }
        }
        //map.fitBounds(bounds);
    } else {
        alert("Geocode 取得に失敗しました reason: ");
    }
}
