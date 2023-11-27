<div class="modal-container" id="myModal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal()">&times;</span>
            <h2 class="card-title modal-title">Envíanos tu Reporte:</h2>
            <form action="public/action-store-report.php" method="post" enctype="multipart/form-data" class="create-report-form">
                <input type="text" name="autor" placeholder="Nombre" maxlength="50" required>
                <input type="text" name="ciudad" placeholder="Ciudad" maxlength="50" required>
                <input type="text" name="departamento" placeholder="Departamento" maxlength="50" required>
                <input type="email" name="email" placeholder="Email" maxlength="100" required>
                <input type="text" name="titulo" placeholder="Titular del Reporte" maxlength="100" required>
                <textarea name="descripcion" placeholder="Descripción" maxlength="250" required></textarea>
                <input type="file" name="evidencia" accept="image/*" required>
                <input type="submit" value="Enviar" class="submit-btn">
            </form>
        </div>
</div>