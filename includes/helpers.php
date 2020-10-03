<?php

function showErrors($error) {
    return "<div class='alerta alerta-error'>".$error."</div>";
}

function alert($message) {
    return "<div class='alerta alerta-exito'>".$message."</div>";
}