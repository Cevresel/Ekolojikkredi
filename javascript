function calculateCredit(atik, kg) {
    let kredi = 0;

    // Atık türüne göre kredi hesaplama
    switch (atik) {
        case 'Plastik':
            kredi = kg * 10;  // Her kilogram plastik için 10 puan
            break;
        case 'Kağıt':
            kredi = kg * 5;   // Her kilogram kağıt için 5 puan
            break;
        case 'Cam':
            kredi = kg * 7;   // Her kilogram cam için 7 puan
            break;
        case 'Metal':
            kredi = kg * 8;   // Her kilogram metal için 8 puan
            break;
        case 'Pil':
            kredi = kg * 15;  // Her kilogram pil için 15 puan
            break;
        case 'Elektronik':
            kredi = kg * 20;  // Her kilogram elektronik atık için 20 puan
            break;
        default:
            kredi = 0;
            break;
    }

    return kredi;
}
