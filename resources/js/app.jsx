import.meta.glob([
    '../images/**',
]);
import React from 'react';
import ReactDOM from 'react-dom/client';
import MapComponent from './RoutePlaner/Map';



const rootElement = document.getElementById("root");
ReactDOM.render(<MapComponent />, rootElement);

