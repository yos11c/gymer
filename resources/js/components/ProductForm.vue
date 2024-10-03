<template>
    <div>
        <form @submit.prevent="submitForm" enctype="multipart/form-data">
            <div class="form-group">
                <label for="codigo">Código</label>
                <input type="text" v-model="product.id" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" v-model="product.nombre" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input type="text" v-model="product.descripcion" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="img">Imagen</label>
                <input type="file" @change="onFileChange" class="form-control">
            </div>

            <br>
            <a href="/productos" class="btn btn-primary">
                <span class="bi bi-arrow-return-left">Volver</span>
            </a>
            <button class="btn btn-primary" type="submit">
                <span class="bi bi-check">Agregar</span>
            </button>
        </form>
    </div>
</template>

<script>
import axios from 'axios';
import toastr from 'toastr';

toastr.options = {
    "positionClass": "toast-center-center",
    "timeOut": "0",
    "extendedTimeOut": "0",
    "closeButton": true,
    "progressBar": true
};

export default {
    data() {
        return {
            product: {
                id: '',
                nombre: '',
                descripcion: '',
                img: null,
            }
        };
    },
    methods: {
        submitForm() {
            const formData = new FormData();
            formData.append('id', this.product.id);
            formData.append('nombre', this.product.nombre);
            formData.append('descripcion', this.product.descripcion);
            if (this.product.img) {
                formData.append('img', this.product.img);
            }

            axios.post('/api/products/store', formData)
                .then(response => {
                    toastr.success('Producto agregado con éxito!');
                    this.$router.push('/productos');
                })
                .catch(error => {
                    toastr.error('Ocurrió un error al agregar el producto.');
                    console.error('Error al agregar el producto:', error);
                });
        },
        onFileChange(e) {
            this.product.img = e.target.files[0];
        }
    }
};
</script>
