<style>
    :root {
    --theme-color: <?= !empty($couleur2_entreprise) ? $couleur2_entreprise .' !important' :'#47b32d ' ?>;
    --theme-color2: <?= !empty($couleur1_entreprise) ? $couleur1_entreprise .' !important' :'#ffcb24 ' ?> ;
    --theme-color-light: #2f9916;
    }

    body {
    line-height: 24px;
    letter-spacing: 0.02em;
    font-family: 'Roboto'; 
    /* font-family: 'Open Sans', sans-serif; Roboto */
    -webkit-font-smoothing: antialiased;
    font-size: 14px;
    color: #646363;
    font-weight: 600;
}
    p{
        font-size: 14px;
    }
</style>