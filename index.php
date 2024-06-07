<?php include 'header.php'; ?>

<?php
$pianeti = [
    "sole" => [
        "nome" => "Sole",
        "descrizione" => "Il Sole è la stella al centro del nostro Sistema Solare, una sfera quasi perfetta di plasma incandescente. È la principale fonte di luce e calore per i pianeti del Sistema Solare, compresa la Terra. Con un diametro di circa 1.392.000 chilometri, il Sole è una gigantesca sfera di gas, principalmente idrogeno ed elio, che si trova a una distanza di circa 149,6 milioni di chilometri dalla Terra. La sua superficie è segnata da intensi fenomeni come le macchie solari e le eruzioni solari. Grazie alla sua gravità, il Sole mantiene in orbita i pianeti e gli altri corpi celesti del Sistema Solare. La sua energia tramite la radiazione solare è fondamentale per la vita sulla Terra, facilitando la fotosintesi delle piante e regolando il clima del nostro pianeta.",
        "immagine" => "img/sole.jpg"
    ],
    "mercurio" => [
        "nome" => "Mercurio",
        "descrizione" => "Mercurio è il pianeta più vicino al Sole nel Sistema Solare e il più piccolo dei pianeti rocciosi. Con un diametro di circa 4.880 chilometri, è solo leggermente più grande della Luna della Terra. È caratterizzato da una superficie craterica simile alla Luna, con valli, scarpate e pianure laviche. La sua atmosfera è estremamente sottile, composta principalmente di elio e tracce di ossigeno e sodio. A causa della sua vicinanza al Sole, le temperature su Mercurio possono variare drasticamente, con valori che possono raggiungere i 427 °C durante il giorno e scendere fino a -173 °C durante la notte. Mercurio ha un'orbita eccentrica e ruota molto lentamente su se stesso, completando solo tre rotazioni ogni due orbite intorno al Sole.",
        "immagine" => "img/mercurio.jpg"
    ],
    "venere" => [
        "nome" => "Venere",
        "descrizione" => "Venere è il secondo pianeta del Sistema Solare e spesso definito il gemello della Terra per le loro dimensioni simili. La sua densa atmosfera, composta principalmente da anidride carbonica, genera un effetto serra estremo che rende la sua superficie rovente, con temperature superiori ai 450°C. Caratterizzata da pianure laviche, vulcani e montagne alte, Venere è il pianeta più caldo del Sistema Solare nonostante non sia il più vicino al Sole.",
        "immagine" => "img/venere.jpg"
    ],
    "terra" => [
        "nome" => "Terra",
        "descrizione" => "La Terra è il terzo pianeta del Sistema Solare e l'unico pianeta conosciuto per ospitare la vita. È caratterizzata da una vasta gamma di ecosistemi, un'atmosfera ricca di ossigeno e una superficie coperta per il 70% da acqua. Con un diametro di circa 12.742 chilometri, la Terra è il più grande dei pianeti rocciosi. La sua atmosfera protettiva trattiene il calore del sole e protegge la vita dalla radiazione solare dannosa. La Terra ha una vasta diversità di paesaggi, climi e ecosistemi, che vanno dalle regioni polari ai deserti, dalle foreste pluviali alle montagne. È anche il solo corpo celeste in grado di sostenere acqua allo stato liquido in superficie, una caratteristica fondamentale per lo sviluppo della vita come la conosciamo.",
        "immagine" => "img/terra.jpg"
    ],
    "marte" => [
        "nome" => "Marte",
        "descrizione" => "Marte è il quarto pianeta del Sistema Solare, spesso chiamato il Pianeta Rosso		per il suo caratteristico colore. È più piccolo della Terra, con un diametro di circa la metà, e la sua atmosfera è molto sottile, composta principalmente di anidride carbonica. La sua superficie è segnata da valli, vulcani, e ampie pianure, tra cui la vasta pianura chiamata Tharsis. 

Marte è stato oggetto di grande interesse per la ricerca scientifica, in quanto potrebbe avere ospitato forme di vita passate o presenti. Missioni spaziali hanno confermato la presenza di acqua ghiacciata e segni di antichi corsi d'acqua sulla sua superficie, suggerendo che potrebbe aver avuto un ambiente più caldo e umido in passato. Attualmente, Marte è uno dei principali obiettivi per l'esplorazione umana e robotica, con molte missioni in corso per studiare la sua geologia, clima, e cercare segni di vita passata o presente.",
        "immagine" => "img/marte.jpg"
    ],
    "giove" => [
        "nome" => "Giove",
        "descrizione" => "Giove gioca un ruolo cruciale nella struttura del Sistema Solare, influenzando le orbite degli altri pianeti e proteggendo la Terra da molti impatti di asteroidi e comete grazie alla sua gravità. Le sue lune galileiane sono oggetto di grande interesse scientifico, con alcune che potrebbero avere condizioni favorevoli alla vita. Studiare Giove ci aiuta a comprendere meglio la formazione e l'evoluzione dei pianeti giganti gassosi.",
        "immagine" => "img/giove.jpg"
    ],
    "saturno" => [
        "nome" => "Saturno",
        "descrizione" => "Saturno è il sesto pianeta del Sistema Solare e uno dei più iconici grazie ai suoi spettacolari anelli. È il secondo più grande pianeta dopo Giove ed è principalmente composto da idrogeno ed elio, con una piccola frazione di altri elementi. Gli anelli di Saturno sono composti principalmente di ghiaccio e polvere, e sono visibili anche con un piccolo telescopio. Saturno ha anche numerosi satelliti naturali, tra cui il più grande, Titano, che ha una densa atmosfera e laghi di idrocarburi liquidi sulla sua superficie. Saturno è uno dei pianeti più studiati grazie alle missioni spaziali come Cassini-Huygens, che ha esplorato il pianeta e i suoi satelliti per molti anni.",
        "immagine" => "img/saturno.jpg"
    ],
    "urano" => [
        "nome" => "Urano",
        "descrizione" => "Urano è il settimo pianeta del Sistema Solare ed è caratterizzato da un asse di rotazione inclinato quasi perpendicolarmente rispetto al suo piano orbitale, il che lo rende unico tra i pianeti. È principalmente composto da idrogeno ed elio, con una piccola frazione di altri gas. Urano è noto per il suo colore distintivo di un azzurro-verde pallido, dovuto alla presenza di metano nell'atmosfera che assorbe la luce rossa. Il pianeta ha anche anelli e 27 satelliti naturali noti. Urano è stato visitato solo una volta da una sonda spaziale, la Voyager 2 nel 1986, quindi rimane ancora relativamente poco conosciuto rispetto ad altri pianeti del Sistema Solare.",
        "immagine" => "img/urano.jpg"
    ],
    "nettuno" => [
        "nome" => "Nettuno",
        "descrizione" => "Nettuno è l'ottavo e ultimo pianeta del Sistema Solare, situato oltre Urano. È principalmente composto da idrogeno, elio e metano, che conferiscono al pianeta il suo colore blu caratteristico. Nettuno è noto per i suoi forti venti, che possono raggiungere velocità molto elevate, e per la Grande Macchia Oscura, una tempesta simile alla Grande Macchia Rossa di Giove. Ha anche anelli e almeno 14 satelliti naturali noti. Nettuno è stato visitato solo una volta da una sonda spaziale, anche la Voyager 2 nel 1989, e rimane un oggetto di interesse per gli scienziati che cercano di comprendere meglio la sua atmosfera dinamica e la sua composizione interna.",
        "immagine" => "img/nettuno.jpg"
    ],
];

$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'home';

if ($pagina == 'home' || !array_key_exists($pagina, $pianeti)) {
    echo '<h2>Benvenuti nel Sistema Solare!</h2>';
    echo '<p>Seleziona un pianeta dal menu per saperne di più.</p>';
} else {
    echo '<h2>' . $pianeti[$pagina]['nome'] . '</h2>';
    echo '<img src="' . $pianeti[$pagina]['immagine'] . '" alt="' . $pianeti[$pagina]['nome'] . '" class="pianeta-img">';
    echo '<p>' . $pianeti[$pagina]['descrizione'] . '</p>';
}
?>

<?php include 'footer.php'; ?>
