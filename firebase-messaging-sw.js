importScripts('https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/7.14.6/firebase-messaging.js');

var firebaseConfig = {
    apiKey: "AIzaSyB8t2kV2nkZf03opSt3XEz9fn6jC9TJ2ok",
    authDomain: "fir-js-fbe11.firebaseapp.com",
    databaseURL:"https://fir-js-fbe11-default-rtdb.firebaseio.com/",
    projectId: "fir-js-fbe11",
    storageBucket: "fir-js-fbe11.appspot.com",
    messagingSenderId: "401350460853",
    appId: "1:401350460853:web:2c3830c6470d4a40e705fc",
    measurementId: "G-NCB2PY64PT"
  };

firebase.initializeApp(firebaseConfig);
const messaging=firebase.messaging();

messaging.setBackgroundMessageHandler(function (payload) {
    console.log(payload);
    const notification=JSON.parse(payload);
    const notificationOption={
        body:notification.body,
        icon:notification.icon
    };
    return self.registration.showNotification(payload.notification.title,notificationOption);
});