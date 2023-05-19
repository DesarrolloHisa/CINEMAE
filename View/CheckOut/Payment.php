<!DOCTYPE html>
<html>
<head>
    <title>Pago</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="stylesPayment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<a href="../../index.php" class="button">Página principal</a>
    <main class="page payment-page">
        <section class="payment-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2>PAGO</h2>
                </div>
                <form>
                    <div class="products">
                        <h3 class="title">Selecciona las siguiente opciones</h3>
                        <div>
                            <label for="card-number">Sede: </label>
                            <select name="Sedes">
                                <option value="Premium">Premium Plaza</option>
                                <option value="Mayorca">Mayorca</option>
                                <option value="Santafe">Santafe</option>                            
                            </select>
                        </div>
                        <div>
                        <label for="card-number">Fecha: </label>
                            <input type="date" name="fecha">
                        </div>
                        <div>
                            <label for="card-number">Numero de tiquetes: </label>
                            <input id="card-number" type="number" placeholder="#" name="numero" min="1 step="1" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                        <div class="item">
                            <label for="card-number">Correo </label>
                            <input id="card-number" type="text" class="form-control" placeholder="Correo electronico" aria-label="Card Holder" aria-describedby="basic-addon1">
                        </div>
                        <div>
                            <table>
                                <tr>
                                    <td></td> <!-- Espacio vacío para la esquina superior izquierda -->
                                    <td class="header">A</td>
                                    <td class="header">B</td>
                                    <td class="header">C</td>
                                    <td class="header">D</td>
                                    <td class="header">E</td>
                                    <td class="header">F</td>
                                    <td class="header">G</td>
                                    <td class="header">H</td>
                                    <td class="header">I</td>
                                    <!-- Resto de encabezados de columnas -->
                                </tr>
                                <tr>
                                    <td class="header">1</td>
                                    <td class="available"><button type="button" onclick="toggleSeat('1A')" class="seat-number">1A</button></td>
                                    <td class="unavailable"></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('1C')" class="seat-number">1C</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('1D')" class="seat-number">1D</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('1E')" class="seat-number">1E</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('1F')" class="seat-number">1F</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('1G')" class="seat-number">1G</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('1H')" class="seat-number">1H</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('1I')" class="seat-number">1i</button></td>
                                    <!-- Resto de asientos en la fila 1 -->
                                </tr>
                                <tr>
                                    <td class="header">2</td>
                                    <td class="available"><button type="button" onclick="toggleSeat('2A')" class="seat-number">2A</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('2B')" class="seat-number">2B</button></td>
                                    <td class="unavailable"></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('2D')" class="seat-number">2D</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('2E')" class="seat-number">2E</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('2F')" class="seat-number">2F</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('2G')" class="seat-number">2G</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('2H')" class="seat-number">2H</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('2I')" class="seat-number">2i</button></td>
                                    <!-- Resto de asientos en la fila 2 -->
                                </tr>
                                <tr>
                                    <td class="header">3</td>
                                    <td class="available"><button type="button" onclick="toggleSeat('3A')" class="seat-number">3A</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('3B')" class="seat-number">3B</button></td>
                                    <td class="unavailable"></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('3D')" class="seat-number">3D</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('3E')" class="seat-number">3E</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('3F')" class="seat-number">3F</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('3G')" class="seat-number">3G</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('3H')" class="seat-number">3H</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('3I')" class="seat-number">3i</button></td>
                                    <!-- Resto de asientos en la fila 2 -->
                                </tr>
                                <tr>
                                    <td class="header">4</td>
                                    <td class="available"><button type="button" onclick="toggleSeat('4A')" class="seat-number">4A</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('4B')" class="seat-number">4B</button></td>
                                    <td class="unavailable"></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('4D')" class="seat-number">4D</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('4E')" class="seat-number">4E</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('4F')" class="seat-number">4F</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('4G')" class="seat-number">4G</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('4H')" class="seat-number">4H</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('4I')" class="seat-number">4I</button></td>
                                    <!-- Resto de asientos en la fila 2 -->
                                </tr>
                                <tr>
                                    <td class="header">5</td>
                                    <td class="available"><button type="button" onclick="toggleSeat('5A')" class="seat-number">5A</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('5B')" class="seat-number">5B</button></td>
                                    <td class="unavailable"></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('5D')" class="seat-number">5D</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('5E')" class="seat-number">5E</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('5F')" class="seat-number">5F</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('5G')" class="seat-number">5G</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('5H')" class="seat-number">5H</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('5I')" class="seat-number">5I</button></td>
                                    <!-- Resto de asientos en la fila 2 -->
                                </tr>
                                <tr>
                                    <td class="header">6</td>
                                    <td class="available"><button type="button" onclick="toggleSeat('6A')" class="seat-number">6A</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('6B')" class="seat-number">6B</button></td>
                                    <td class="unavailable"></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('6D')" class="seat-number">6D</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('6E')" class="seat-number">6E</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('6F')" class="seat-number">6F</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('6G')" class="seat-number">6G</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('6H')" class="seat-number">6H</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('6I')" class="seat-number">6I</button></td>
                                    <!-- Resto de asientos en la fila 2 -->
                                </tr>
                                <tr>
                                    <td class="header">7</td>
                                    <td class="available"><button type="button" onclick="toggleSeat('7A')" class="seat-number">7A</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('7B')" class="seat-number">7B</button></td>
                                    <td class="unavailable"></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('7D')" class="seat-number">7D</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('7E')" class="seat-number">7E</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('7F')" class="seat-number">7F</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('7G')" class="seat-number">7G</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('7H')" class="seat-number">7H</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('7I')" class="seat-number">7I</button></td>
                                    <!-- Resto de asientos en la fila 2 -->
                                </tr>
                                <tr>
                                    <td class="header">8</td>
                                    <td class="available"><button type="button" onclick="toggleSeat('8A')" class="seat-number">8A</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('8B')" class="seat-number">8B</button></td>
                                    <td class="unavailable"></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('8D')" class="seat-number">8D</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('8E')" class="seat-number">8E</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('8F')" class="seat-number">8F</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('8G')" class="seat-number">8G</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('8H')" class="seat-number">8H</button></td>
                                    <td class="available"><button type="button" onclick="toggleSeat('8I')" class="seat-number">8I</button></td>
                                    <!-- Resto de asientos en la fila 2 -->
                                </tr>
                                <!-- Resto de filas y asientos -->
                            </table>

                            <p>Asientos seleccionados:</p>
                            <input type="text" id="asientosSeleccionados" readonly>
                        </div> 
                        <div class="item">
                            <span class="price">$20000</span>
                            <p class="item-name">Producto 1</p>
                            <p class="item-description">Combo personal</p>
                        </div>
                        <div class="item">
                            <span class="price">$40000</span>
                            <p class="item-name">Producto 2</p>
                            <p class="item-description">Combo para dos</p>
                        </div>
                        <div class="total">Total<span class="price">$60000</span></div>
                    </div>
                    <div class="card-details">
                        <h3 class="title">Detalles tarjeta de crédito</h3>
                        <div class="row">
                            <div class="form-group col-sm-7">
                                <label for="card-holder">Titular de la tarjeta</label>
                                <input id="card-holder" type="text" class="form-control" placeholder="Card Holder" aria-label="Card Holder" aria-describedby="basic-addon1">
                            </div>
                            <div class="form-group col-sm-5">
                                <label for="">Fecha de expiración</label>
                                <div class="input-group expiration-date">
                                    <input type="text" class="form-control" placeholder="MM" aria-label="MM" aria-describedby="basic-addon1">
                                    <span class="date-separator">/</span>
                                    <input type="text" class="form-control" placeholder="YY" aria-label="YY" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="form-group col-sm-8">
                                <label for="card-number">Número de tarjeta</label>
                                <input id="card-number" type="text" class="form-control" placeholder="Card Number" aria-label="Card Holder" aria-describedby="basic-addon1">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="cvc">CVC</label>
                                <input id="cvc" type="text" class="form-control" placeholder="CVC" aria-label="Card Holder" aria-describedby="basic-addon1">
                            </div>
                            <div class="form-group col-sm-12">
                                <button type="button" class="btn btn-primary btn-block">Pagar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>

<script>
  const selectedSeats = [];

  function toggleSeat(seat) {
    const index = selectedSeats.indexOf(seat);
    if (index === -1) {
      selectedSeats.push(seat);
    } else {
      selectedSeats.splice(index, 1);
    }
    updateSelectedSeats();
  }

  function updateSelectedSeats() {
    const asientosSeleccionadosInput = document.getElementById('asientosSeleccionados');
    asientosSeleccionadosInput.value = selectedSeats.join(', ');
  }
</script>