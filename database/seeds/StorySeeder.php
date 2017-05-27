<?php

use Illuminate\Database\Seeder;

class StorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $url = Config::get('app.url');

        DB::table('story')->insert([
            [
                'id' => 1,
                'name' => "Srednjevekovni grad Koznik",
                'description' => "<p>Koznik, u narodu poznat kao Jerinin grad je stari srednjovjekovni utvrđeni grad koji se nalazi na desnoj obali Kozičke rijeke, kod sela Kozice, 25 kilometara jugoistočno od Pljevlja, na oko 1200 metara nadmorske visine.
Koznik se u dokumentima prvi put pominje u prvoj polovini XV vijeka, tačnije 1441. godine u pisanim izvorima Dubrovačke arhivske građe. Kao Castrum Koznik ( Schoznich ), grad se pominje i u povelji Fridriha III ( 1452-1493 ) hercegu Stefanu Vukčiću Kosači ( 1435-1466 ) iz 1448. godine. 
Može se slobodno reći da je Koznik tipičan primjer prilagođavanja osnove utvrđenja terenu i maksimalno korišćenje prirodnih oblika stjenovitog brda, kako bi grad bio što manje pristupačan. Grad ima jako izdužen oblik u osnovi. Ostaci grada stvaraju sliku skladno izdignutih zidina sa visokim i strmoglavim liticama iznad Kozičke rijeke, dajući efektnu viziju sjedinjenosti grada i brda na kojem leži sa kulama i zidinama koje su služile za zaštitu i odbranu obližnjeg rudnika gvožđa.
Srednjevjekovna citadela je uočljiva i prostire se pravcem sjever - jug oko 120 metara dužine i oko 20 metara širine. Kula je smještena na južnom, najvisočijem dijelu tvrđave. U osnovi je četvorougaona i pogodna za odbranu. Središnja kula je četvorougaona, nešto je manja i povezana je odbrambenim zidom sa sjevernom kulom. Sjeverna kula je najprostranija osnova pa se pretpostavlja da je služila kao mjesto stanovanja posade. 
</p>
<b>Položaj Koznika u srednjem vijeku</b><br/>
<p>
Koznik je, očigledno, bio granično utvrđenje kroz koje je vodio vrlo važan trgovački put od Dubrovnika ka Mileševi i Prijepolju pa je trgovina bila vrlo razvijena. Iz sačuvanih dokumenata može se pretpostaviti da je čak možda bio i pazarište, i najvjerovatnije stanica na karavanskom putu od Dubrovnika prema Mileševcu i dalje Malom brdu.
Selo Kozica se u to vrijeme pominje u dubrovačkim dokumentima.
U Dubrovačkim zapisima iz 1442. godine pominju se trgovci iz Koznika koji su raznim poslovima bili povezani te rado trgovali i koristili finansijske usluge Dubrovčana.
Te 1442. godine je ostalo zabilježeno da je dubrovački trgovac Brajko Bogosalić podnio tužbu protiv trojice dubrovačkih trgovaca i nekog Mikocija iz Koznika ( Schosnich ) da su mu napali i opljačkali sina Maroja u dućanu u Trgovištu.
Takođe, zabilježeno je da je Radoje Grbačić iz Koznika, 6. maja 1441. godine uzeo kredit od 50 perpera od Petra Pucića i da će kredit vratiti u roku od dva mjeseca.
Stanovnici ondašnje Kozice su, očigledno imali vrlo razvijene trgovačke poslove s Dubrovčanima. To potvrđuje još jedan pisani dokument. Podkozičanin, neki Radoje Pribićević ( Spodcosize de Prepogle ) ostao je dužan Radiču Grubačeviću, poznatom dubrovačkom trgovcu i suknaru, 35 dukata.
Prema mišljenju arheologa, Jerinin grad je, iz nekih razloga ostao nepotpuno završen. Najvjerovatnije je da su njegovu dalju gradnju omela turska nadiranja na Balkan. Zato je ostao i nedovoljno istražen i zaštićen.
Ponajviše podataka o Kozniku dao je M. Savić iz Beograda, koji ga je istraživao pedesetih godina prošlog vijeka kada se pokušavalo sa ponovnim otvaranjem rudnika gvožđa u njegovom susjedstvu. Medaljon Sv. Dimitrija, Osnova Jerininog grada, Nadgrobne ploče, Medaljon Sv. Dimitrija s natpisom na srpskom jeziku, odliven od željezne šljake kozičkog rudnika gvožđa, potiče iz 13 vijeka. Nadgrobne ploče i spomenik potiču iz groblja koje se nalazi pored Jerininog grada.
Iako su pisani tragovi postojanja Koznika datirani u XV vijeku, arheološkim pregledom lokaliteta identifikovana je trasa rimskog puta koji je vodio iz Municipiuma S, pored navedenog grada sve do Kolovrata u Prijepolju i služio je kao zimska ruta ( zbog nemogućnosti obavljanja saobraćaja preko Jabuke ). 
Očigledno da je Koznik imao i podgrađe jer na to upućuju nazivi Sotto Cosiza i Spodcosize. Ono nije definisano arheološki, ali sudeći po položaju groblja, te pejzažnim pregledom terena, može se zaključiti da se radi o platou odmah ispod bedema, sjeverozapadno od glavne kule.
Rezervoar pitke vode - košnice, nalazi se na 10 metara sjeverno od srednje kule sa istočne strane odbrambenog bedema unutar grada.
Jugozapadno na oko 450 metara od grada, pored trase rimskog puta postoje ostaci srednjevjekovne crkve ili manastira ( Manastir Orlić ), pored kojeg se nalazi izvor poznat kao “Kaluđerska voda”. Po usmenom predanju manastir je uništen u XVII vijeku.
</p>
<b>Koz(n)ički rudnik</b><br/>
<p>
Tragovi rudarenja sačuvani su i danas postoje u ataru sela Kozice gdje se u srednjem vijeku nalazio aktivan rudnik gvožđa.
Ruda je bila vrlo dobrog kvaliteta, eksploatacija je bila laka, što je, svakako, uslovilo da se na tom mjestu podigne utvrđenje i mnogo ranije nego što nalazimo u dubrovačkim dokumentima. Pretpostavlja se da je rudnik korišten u starom vijeku, upravo od strane Rimljana a kasnije i ( Vizantinaca ) Romeja o čemu postoji usmena tradicija o lokaciji tzv. grčkih grobalja. Takođe se pretpostavlja da je Koznik u srednjem vijeku bio naseljen dominantno Sasima, koji su iskopavali rudu.
Po kazivanju mještana koji još živi eksploatacija rude je obnovljena krajem 40-tih godina XX vijeka, ali se od projekta brzo odustalo, najvjerovatnije usled istorijskih okolnosti ( izolacija tadašnje Jugoslavije ). Upravo tada, krajem 40-tih godina XX vijeka, od strane Ministarstva Ruda i Šuma tadašnje Jugoslavije, izrađena je studija isplativosti korišćenja rudnih nalazišta u opštini Pljevlja. U navedenoj studiji opisan je i dat nacrt Koznika, sa detaljnim prikazom sa četiri odbrambene kule u gornjem gradu te okruglom kulom u donjem gradu. U istom dokumentu se navodi da je tokom rudarskih radova pronađen stariji potkop u rudniku koji ukazuje na vrlo star rad, pa se pretpostavlja da se radi o antičkoj eksploataciji rude.
</p>
<b>Legenda o Kozniku</b>
<p>
U srednjem vijeku postojao je veliki broj sličnih gradova i utvrđenja koji su i danas dobro očuvani. Locirani su na pogodnim uzvišenjima i služili su za zaštitu i odbranu. Građeni su na skoro identičan način i svi se uglavnom zovu Koznik ili Jerinin grad. Uz sve njih idu kazivanja kako ih je gradila prokleta Jerina, obavezujući podanike na kuluk i argatovanje. Grede i kamen su tovareni, kako predanja kazuju, na koze i jarčeve koji su ih iznosili do vrha strmih litica, na kojim je grad zidan.
Kad je grad Koznik sagrađen, kazuje legenda, prokleta Jerina je naredila da se otisnu skele, dok su četvorica glavnih neimara ostala bespomoćna nad ambisom. Valjda nije željela da odaju tajne podignutog grada. Prema kazivanju koje i do danas traje, neimari su pokušali da se spasu tako što su napravili krila od dasaka. Jedan je pao u provaliju i nastradao. Drugi, zvani Orle, je uspio da poleti i da se spusti u blizini grada. To mjesto je prozvano i danas se zove Orlić. Treći, Ostoja, preletio je preko rijeke i to se mjesto po njemu prozvalo Osoje. Četvrti je dugo klepetao, klopotao krilima i spustio se na uzvišenje koje se i danas zove Klopet.</p>
",
                'image_url' => $url . '/images/story/koznik.jpg',
                'author_id' => 2
            ],
            [
                'id' => 2,
                'name' => "Biblioteka manastira Sveta Trojica iz Pjevlja",
                'description' => "<p>Uz Husein-pašinu džamiju, manastir Sveta Trojica predstavlja najznačajniji spomenik kulture u Pljevljima. Međutim, dosadašnje iskustvo govori da turisti nisu upoznati sa činjenicom da manastir Sveta Trojica najveći prepisivački centar Crne Gore iz osmanskog perioda, a da su neki od najljepših slovenskih rukopisa iz osmanskog perioda na ovim prostorima  nastali upravo u manastiru Svata Trojica. Naime, viševjekovna duhovna djelatnost manastira Sveta Trojica, poznatog i kao Vrhobreznica, ostavila je brojna izuzetno vrijedna djela iz oblasti književnosti, slikarstva, zlatarstva, crkvenog veza i drvorezbarstva, koja zajedno sa umjetničkim ostvarenjima nastalim u nekim drugim sredinama, čine veoma vrijednu manastirsku biblioteku i riznicu. Neposredno po osnivanju, manastir se istakao razvijenom prepisivačkom djelatnošću, tako da danas postoji više desetina očuvanih rukopisnih knjiga, za koje se pouzdano zna da su nastale u Svetoj Trojici i da su njihovi prepisivači bili Trojičani – poznati po izuzetno lijepom jeziku i uglađenom načinu izražavanja. Ljepotom ispisanog teksta, istačanošću pri izradi zastava i inicijala, kao i skupocjenošću svoga okova, u rukopisima iz XVI vijeka osobito se izdvaja veliko četvorojevanđelje iz šezdesetih godina, koje je napisao dijak Dimitrije, a povezao Evstratije. Ovaj rukopis spada u red najljepših knjiga nastalih na ovim prostorima, u doba osmanske vladavine. Manastirska djela često su bila uokvirena reprezentativnim okovima. Tako, djelo majstora iz jedne od hercegovačkih radionica predstavlja i reprezentativni okov jevanđelja iz pretposlednje decenije XVI vijeka, na čijim je prednjim koricama, u tehnici iskucavanja, prikazan Silazak Hristov u ad. 
</p><p>Prepisivačko središte pri manastiru Svete Trojice dostiglo je vrhunac sredinom XVII vijeka, ponajviše zahvaljujući monahu Gavrilu Trojičaninu, proslavljenom prepisivaču i vještom priređivaču starih tekstova, koji je – kao osobito obrazovan i čovjek živog duha – bogatim, gotovo raskošnim jezikom prepisao nekoliko hiljada listova, među kojima se posebno ističu: Psaltir (1642/43), Šestodnev bugarskog egzarha Jovana i Hrišćanska topografija Kozme Indikoplova (1649), kao i Vrhobreznički hronograf (1650), koji se čuva u Narodnom muzeju u Pragu. Minijature iz Psaltira, autora poznatog slikara Jovana, kao i minijature zografa Andreje Raičevića, iz Trojičkog Šestodneva i Hrišćanske topografije, predstavljaju jedan od najvećih poduhvata minijaturnog slikarstva u doba osmanske vladavine u ovim krajevima. Pored rukopisa nastalih u krugu manastirske prepisivačke radionice, riznica Svete Trojice čuva mnoge knjige koje potiču iz drugih manastira, a inicijalima na početnim listovima rukopisa osobito se izdvajaju, Psaltir iz prve polovine XIV vijeka i Pljevaljski (Tašlidžki) služabnik Tvrtka Pripkovića, takođe iz XIV vijeka, koji se danas čuva u Ruskoj nacionalnoj biblioteci u Sankt-Peterburgu.
</p><p>Iz naprijed navedenog jasno se zaključuje da je manastir Sveta Trojica najveći i najznačajniji prepisivački centar iz osmanskog perioda na teritoriji savremene Crne Gore sa izuzetno vrijednom bibliotekom. Međutim, to se nikada ne ističe u turističkoj valorizaciji samog manastira i turisti ostaju uskraćeni za tu važnu informaciju. Smatramo da je potrebno osmisliti načine kako bi se izuzetno vrijedna biblioteka manastira Sveta Trojica – kao produkt dugotrajne prepisivačke djelatnosti najvećeg i najznačajnijeg prepisivačkog centra iz osmanskog perioda u Crnoj Gori – značajnije valorizovala u turističkoj promociji manastira Sveta Trojica, Pljevalja i Crne Gore. U tom smjeru, namjera Zavičajnog muzeja jeste da publikuje informativni katalog sa osnovnim podacima o najznačajnijim djelima prepisanim u Svetoj Trojici i na taj način turistički promoviše ovaj osobito značajan aspekt duhovnog nasljeđa Crne Gore i Pljevalja.  ",
                'image_url' => $url . '/images/story/sveta-trojica.jpg',
                'author_id' => 2
            ],
            [
                'id' => 3,
                'name' => "Husein-pašina džamija",
                'description' => "
<p>Husein-pašina džamija je jedan od najznačajnijih spomenika islamske arhitekture na ovim prostorima, a kompleks cjeline Husein-pašine džamije valorizuje se u turističkoj ponudi Pljevalja. Međutim, stiče se utisak da neki osobeni detalji Husein-pašine džamije nisu dovoljno valorizovani i da se turisti rijetko upoznaju sa njima. Projektom Zavičajnog muzeja, u toku ove godine napraviće se osnove za značajniju turističku valorizaciju knjige Kur’an Husein-paše Boljanića, remek-djela islamske kaligrafije iz 1571. godine. Dalje, kroz projekat „Sva čuda Crne Gore“ smatramo da se zbog svojih istorijskih i umjetničkih specifičnosti šadrvan i česnaestovjekovni ćilim Husein-pašine džamije dodatno mogu valorizovati u turističkoj ponudi Crne Gore i Pljevalja. 
</p>
<b>Šadrvan</b>
<p>
Ljepotu Šardrvana Husein-pašine džamije zapazili su brojni putopisci koji su prošli kroz Pljevlja, tadašnju Tašlidžu: a) Francuz Filip Difren-Kane (1573) zabilježio je da se u džamiji ovog mjesta vidi lijepa i umjetnički rađena česma; Mletački poslanik u Carigradu Paolo Kontarini (1580) u svom dnevniku ističe takođe džamiju sa lijepim šardrvanom; Francuski putopisac Lefevr 1611. zapisao je da Pljevlja imaju tri džamije, dvije od kamena, sa lijepom česmom u jednoj od njih, i treću od drveta. 
	<p></p>O „lijepoj i umjetnički rađenoj česmi“ Husein-pašine džamije postoji zanimljivo predanje koje govori o multikulturnom karakteru Pljevalja. Naime, kako je voda u šadrvan dovedena sa izvora koji se nalazi u blizini manastira Sveta Trojice, udaljenog 2. km od džamije, u narodu je sačuvano predanje o načinu na koji je voda dovedena do šadrvana. Kada je Husein-paša gradio džamiju, majstori su mu skrenuli pažnju da ne mogu izgraditi šadrvan jer se u njegovoj blizini ne nalazi ni jedan izvor, tako da su majstori predložili Husein-paši da se lično obrati igumanu manastira Sveta. Trojica, na čijem imanju se nalazio izvor sa dovoljno pitke vode. Husein-paša je prihvatio ovu sugestiju i zamolio igumana da mu dozvoli da sa manastirskog izvora dovede vodu za potrebe šadrvana. Kako se iguman toj molbi opirao,  Husein-paša je pribjegao lukavstvu. Nakon više pokušaja uspjelo mu je da od igumana dobije dozvolu da sa crkvenog posjeda dovede vodu koju će koristiti dan i noć. Kada je prošlo dvadest četiri časa, iguman je došao kod paše sa zahtjevom da se se sporna voda više ne koristi, jer je prošao jedan dan i jedna noć. Na to paša odgovori da on nije rekao koliko će dana i noći biti, već samo dan i noć. Pošto se dan i noć stalno smjenjuju, onda i voda ostaje da se koristi sve dok traje dan i noć.</p>",
                'image_url' => $url . '/images/story/husein-dzamija.jpg',
                'author_id' => 2
            ],
            [
                'id' => 4,
                'name' => "Prva pivara u Crnoj Gori",
                'description' => "
               <p>Zajedničko prisustvo vojske dvije velike carevine, Austrougarske monarhije i Osmanske imperije, učinilo je period od 1879. do 1908. godine specifičnim i značajnim u razvoju Pljevalja. Naime, moderno opremljena kasarna Austrougarske vojske postala je centar širenja ne samo njihovog vojnog, već i kulturnog uticaja. Učestala druženja među pripadnicima dva garnizona (naročito u danima kada su obilježavani važni praznici vezani za austrougarsku i osmansku istoriju, kao i za hrišćansku i islamsku tradiciju) i njihovi svakodnevni kontakti sa lokalnim stanovništvom, uslovili su ukrštanje različitih kulturnih i civilizacijskih uticaja u Pljevljima. Prisustvo vojske dvije velike carevine u Pljevljima značilo je brojniju i raznovrsniju klijentelu, što je bilo podsticajno za razvoj trgovine i zanatstva.</p>
               </p><p>Lokalitet na kome se nalazila pivara sa pomoćnim objektima nalazi u neposrednoj blizini glavne ulice i na tom potezu danas se nalaze privatne kuće sa dvorištima. Ukoliko bi se sadašnji vlasnici zemlje na kojoj se nekada nalazila pivara složili, bilo bi poželjno odabrati mini-lokaciju na kojoj bi se postavili sačuvano pivsko bure i pored njega tabla sa osnovnim podacima o prvoj pivari u Crnoj Gori. 
</p><p>Zavičajni muzej u Pljevljima upravo je došao u posjed dva austrijska dokumenata iz Državnog arhiva Bosne i Hercegovine na osnovu kojih se zaključuje da je pivara u Pljevljima počela sa radom 1882. godine (a ne kao što je do sada bilo mišljenje 1889. godine), tako da bi projekat bio praćen pratio ozbiljnim istraživačkim radom i pribavljanjem dodatnih austrijskih dokumenata iz Državnog arhiva Bosne i Hercegovine. Ovaj zanimljiv podatak, predstavljen na informativnoj tabli, pored koje bi stajalo autentično bure za pivo, bi na turistički dopadljiv način svjedočio o intenzivnom razvoju grada u vremenu kada su se u Pljevljima susreli osmanski i srednjevropski kulturni uticaji. 
                </p>",
                'image_url' => $url . '/images/story/pivara.jpg',
                'author_id' => 2
            ]
        ]);
    }
}
