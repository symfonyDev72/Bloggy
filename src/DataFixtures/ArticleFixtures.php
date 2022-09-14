<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        // for ($i = 1; $i <= 6; $i++) {

        //     $article = new Article();
        //     $article->setTitle("Titre de l\"article n°$i")
        //         ->setContent("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cur iustitia laudatur? Nec mihi illud dixeris: Haec enim ipsa mihi sunt voluptati, et erant illa Torquatis. Duo Reges: constructio interrete. Hoc etsi multimodis reprehendi potest, tamen accipio, quod dant. Non potes, nisi retexueris illa. Stoici scilicet. Minime vero istorum quidem, inquit. Sit hoc ultimum bonorum, quod nunc a me defenditur; Quid, si reviviscant Platonis illi et deinceps qui eorum auditores fuerunt, et tecum ita loquantur? Quid est igitur, cur ita semper deum appellet Epicurus beatum et aeternum? Contemnit enim disserendi elegantiam, confuse loquitur. 

        //     At ille pellit, qui permulcet sensum voluptate.Ita graviter et severe voluptatem secrevit a bono.

        //     Hoc loco tenere se Triarius non potuit. Nobis aliter videtur, recte secusne, postea; Sed ego in hoc resisto;At enim hic etiam dolore.Quarum ambarum rerum cum medicinam pollicetur, luxuriae licentiam pollicetur. Similiter sensus, cum accessit ad naturam, tuetur illam quidem, sed etiam se tuetur; Negat enim summo bono afferre incrementum diem. Quaesita enim virtus est, non quae relinqueret naturam, sed quae tueretur.Memini vero, inquam; Facillimum id quidem est, inquam. Re mihi non aeque satisfacit, et quidem locis pluribus.

        //     Conferam tecum, quam cuique verso rem subicias; Nunc vero a primo quidem mirabiliter occulta natura est nec perspici nec cognosci potest. Quia, si mala sunt, is, qui erit in iis, beatus non erit. Quid est, quod ab ea absolvi et perfici debeat? Nam si propter voluptatem, quae est ista laus, quae possit e macello peti? Virtutibus igitur rectissime mihi videris et ad consuetudinem nostrae orationis vitia posuisse contraria. Occultum facinus esse potuerit, gaudebit; Haec dicuntur inconstantissime. Et quidem, inquit, vehementer errat; Hoc loco tenere se Triarius non potuit. Ergo opifex plus sibi proponet ad formarum quam civis excellens ad factorum pulchritudinem? 

        //     Consequentia exquirere, quoad sit id, quod volumus, effectum. Dolere malum est: in crucem qui agitur, beatus esse non potest. Nam illud vehementer repugnat, eundem beatum esse et multis malis oppressum. Avaritiamne minuis? Prave, nequiter, turpiter cenabat; Ut in geometria, prima si dederis, danda sunt omnia. Paulum, cum regem Persem captum adduceret, eodem flumine invectio? Ne tum quidem te respicies et cogitabis sibi quemque natum esse et suis voluptatibus? Est, ut dicis, inquit; Sint ista Graecorum;Vitae autem degendae ratio maxime quidem illis placuit quieta. Oculorum, inquit Plato, est in nobis sensus acerrimus, quibus sapientiam non cernimus.")
        //         ->setImage("assets/img/img$i.jpg")
        //         ->setCreatedAt(new \DateTimeImmutable());

        //     $manager->persist($article);
        // }

        // $manager->flush();
    }
}
