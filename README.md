# OCR com Laravel e Tesseract

Exemplo básico de uso do **Tesseract OCR** no **Laravel** para extrair texto de imagens.  
O projeto utiliza a biblioteca PHP [thiagoalessio/tesseract_ocr](https://github.com/thiagoalessio/tesseract-ocr) e suporta português e inglês.  

📺 Vídeo no YouTube: [Assista aqui](https://youtu.be/C_Ht1n5jdaA)  
📂 Código-fonte: [github.com/jefponte/laravel-ocr-test](https://github.com/jefponte/laravel-ocr-test)  

---

## Instalação

```bash
# Instalar Tesseract e pacotes de idioma
sudo apt-get install -y tesseract-ocr tesseract-ocr-por tesseract-ocr-eng

# Criar novo projeto Laravel
composer global require laravel/installer
laravel new ocr-test

# Instalar biblioteca PHP para OCR
composer require thiagoalessio/tesseract_ocr
```

---

## Exemplo de uso

```php
use thiagoalessio\TesseractOCR\TesseractOCR;

$imagePath = storage_path('app/public/documents/nota_fiscal.jpg');

$text = (new TesseractOCR($imagePath))
    ->lang('por', 'eng') // idiomas: português e inglês
    ->psm(3)
    ->oem(1)
    ->run();

echo $text;
```

A imagem deve estar em `storage/app/public/documents/nota_fiscal.jpg`.  
Rodando o código acima, o Tesseract processa a imagem e retorna o texto detectado.

---

## Observações
- É possível instalar outros pacotes de idioma do Tesseract conforme a necessidade.  
- Quanto melhor a qualidade da imagem, melhor o resultado do OCR.  
- Exemplo feito apenas para fins de teste e aprendizado.  
