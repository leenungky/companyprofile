/**
 * jQuery gMap - Google Maps API V3
 *
 * @license MIT License; http://www.opensource.org/licenses/mit-license.php
 * @url   http://github.com/marioestrada/jQuery-gMap
 * @author  Mario Estrada <me@mario.ec> based on original plugin by Cedric Kastner <cedric@nur-text.de>
 * @version 2.2
 */
/* global google */
! function(e) {
    e.fn.gMap = function(o, a) {
        switch (o) {
            case "addMarker":
                return e(this).trigger("gMap.addMarker", [a.latitude, a.longitude, a.content, a.icon, a.popup, a.zIndex]);
            case "centerAt":
                return e(this).trigger("gMap.centerAt", [a.latitude, a.longitude, a.zoom]);
            case "clearMarkers":
                return e(this).trigger("gMap.clearMarkers");
            case "addSearchBox":
                return e(this).trigger('gMap.addSearchBox',[a.box]);
            case "addBtn" :
                return e(this).trigger('gMap.addBtn',[a.location, a.text, a.zoom]);
        }
        var n = e.extend({}, e.fn.gMap.defaults, o);
        return this.each(function() {
            var o = new google.maps.Map(this);
            e(this).data("gMap.reference", o);
            var a = new google.maps.Geocoder;
            n.address ? a.geocode({
                address: n.address
            }, function(e) {
                e && e.length && o.setCenter(e[0].geometry.location)
            }) : n.latitude && n.longitude ? o.setCenter(new google.maps.LatLng(n.latitude, n.longitude)) : e.isArray(n.markers) && n.markers.length > 0 ? n.markers[0].address ? a.geocode({
                address: n.markers[0].address
            }, function(e) {
                e && e.length > 0 && o.setCenter(e[0].geometry.location)
            }) : o.setCenter(new google.maps.LatLng(n.markers[0].latitude, n.markers[0].longitude)) : o.setCenter(new google.maps.LatLng(34.885931, 9.84375)), o.setZoom(n.zoom), o.setMapTypeId(google.maps.MapTypeId[n.maptype]);
            var s = {
                scrollwheel: n.scrollwheel,
                disableDoubleClickZoom: !n.doubleclickzoom
            };
            n.controls === !1 ? e.extend(s, {
                disableDefaultUI: !0
            }) : 0 !== n.controls.length && e.extend(s, n.controls, {
                disableDefaultUI: !0
            }), o.setOptions(s), o.setOptions({
                styles: n.styles
            });
            var t, r, i = new google.maps.Marker;
            t = new google.maps.MarkerImage(n.icon.image), t.size = new google.maps.Size(n.icon.iconsize[0], n.icon.iconsize[1]), t.anchor = new google.maps.Point(n.icon.iconanchor[0], n.icon.iconanchor[1]), i.setIcon(t), n.icon.shadow && (r = new google.maps.MarkerImage(n.icon.shadow), r.size = new google.maps.Size(n.icon.shadowsize[0], n.icon.shadowsize[1]), r.anchor = new google.maps.Point(n.icon.shadowanchor[0], n.icon.shadowanchor[1]), i.setShadow(r)), e(this).bind("gMap.centerAt", function(e, a, n, s) {
                s && o.setZoom(s), o.panTo(new google.maps.LatLng(parseFloat(a), parseFloat(n)))
            });
            var g = [];
            e(this).bind("gMap.clearMarkers", function() {
                for (; g[0];) g.pop().setMap(null)
            });
            var l;
            e(this).bind("gMap.addMarker", function(e, a, s, t, r, d, z) {
                var c, p, m = new google.maps.LatLng(parseFloat(a), parseFloat(s)),
                    h = new google.maps.Marker({
                        position: m,
                        zIndex : google.maps.Marker.MAX_ZINDEX + 1
                    });
                if (r ? (c = new google.maps.MarkerImage(r.image), c.size = new google.maps.Size(r.iconsize[0], r.iconsize[1]), c.anchor = new google.maps.Point(r.iconanchor[0], r.iconanchor[1]), h.setIcon(c), r.shadow && (p = new google.maps.MarkerImage(r.shadow), p.size = new google.maps.Size(r.shadowsize[0], r.shadowsize[1]), p.anchor = new google.maps.Point(r.shadowanchor[0], r.shadowanchor[1]), i.setShadow(p))) : (h.setIcon(i.getIcon()), h.setShadow(i.getShadow())), t) {
                    "_latlng" === t && (t = a + ", " + s);
                    var w = new google.maps.InfoWindow({
                        content: n.html_prepend + t + n.html_append
                    });
                    google.maps.event.addListener(h, "click", function() {
                        l && l.close(), w.open(o, h), l = w
                    }), d && google.maps.event.addListenerOnce(o, "tilesloaded", function() {
                        w.open(o, h)
                    })
                }
                h.setMap(o), g.push(h)
            });
            e(this).bind('gMap.addBtn', function(e,loc, text,zoom) {
                var centerControlDiv = document.createElement('div');
                var centerControl = new CenterControl(centerControlDiv, o,loc,text,zoom);
                
                centerControlDiv.index = 1;
                o.controls[google.maps.ControlPosition.TOP_RIGHT].push(centerControlDiv);
            });
            e(this).bind('gMap.addSearchBox', function(e,b) {
                var input = document.getElementById(b);
                var searchBox = new google.maps.places.SearchBox(input);
                o.controls[google.maps.ControlPosition.TOP_CENTER].push(input);
                o.addListener('bounds_changed', function() {
                    searchBox.setBounds(o.getBounds());
                });
                searchBox.addListener('places_changed', function() {
                    var places = searchBox.getPlaces();
                    if (places.length == 0) {
                        return;
                    }
                    // For each place, get the icon, name and location.
                    var bounds = new google.maps.LatLngBounds();
                    places.forEach(function(place) {
                        if (!place.geometry) {
                            console.log("Returned place contains no geometry");
                            return;
                        }

                        if (place.geometry.viewport) {
                        // Only geocodes have viewport.
                        bounds.union(place.geometry.viewport);
                        } else {
                        bounds.extend(place.geometry.location);
                        }
                    });
                    o.fitBounds(bounds);
                });
            });
            for (var d, c = this, p = function(o) {
                    return function(a) {
                        a && a.length > 0 && e(c).trigger("gMap.addMarker", [a[0].geometry.location.lat(), a[0].geometry.location.lng(), o.html, o.icon, o.popup])
                    }
                }, m = 0; m < n.markers.length; m++) d = n.markers[m], d.address ? ("_address" === d.html && (d.html = d.address), a.geocode({
                address: d.address
            }, p(d))) : e(this).trigger("gMap.addMarker", [d.latitude, d.longitude, d.html, d.icon, d.popup])
        })
    }, e.fn.gMap.defaults = {
        address: "",
        latitude: 0,
        longitude: 0,
        zoom: 1,
        markers: [],
        controls: [],
        styles: [],
        scrollwheel: !1,
        doubleclickzoom: !0,
        maptype: "ROADMAP",
        html_prepend: '<div class="gmap_marker">',
        html_append: "</div>",
        icon: {
            image: "https://www.google.com/mapfiles/marker.png",
            shadow: "https://www.google.com/mapfiles/shadow50.png",
            iconsize: [20, 34],
            shadowsize: [37, 34],
            iconanchor: [9, 34],
            shadowanchor: [6, 34]
        }
    }
}(jQuery);

function CenterControl(controlDiv, map,loc,text,zoom) {

    // Set CSS for the control border.
    var controlUI = document.createElement('div');
    controlUI.style.backgroundColor = '#EF5448';
    controlUI.style.borderRadius = '3px';
    controlUI.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
    controlUI.style.cursor = 'pointer';
    controlUI.style.marginBottom = '22px';
    controlUI.style.textAlign = 'center';
    controlUI.style.marginRight = '10px';
    controlUI.style.marginTop = '10px';
    controlUI.style.borderRadius = '25px';
    controlUI.title = text;
    controlDiv.appendChild(controlUI);

    // Set CSS for the control interior.
    var controlText = document.createElement('div');
    controlText.style.color = 'rgb(255,255,255)';
    // controlText.style.fontFamily = 'Roboto,Arial,sans-serif';
    controlText.style.fontSize = '14px';
    controlText.style.lineHeight = '32px';
    controlText.style.paddingLeft = '10px';
    controlText.style.paddingRight = '10px';
    controlText.style.borderRadius = '25px';
    controlText.innerHTML = text ;
    controlUI.appendChild(controlText);
    // Setup the click event listeners: simply set the map to Chicago.
    controlUI.addEventListener('click', function() {
        var a = new google.maps.Geocoder;
        a.geocode({
            address: loc
        }, function(e) {
            e && e.length && map.setCenter(e[0].geometry.location);
            map.setZoom(zoom);
        })
    });

}