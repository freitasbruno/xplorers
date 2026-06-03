<?php $reflection_question = 'Se o teu país fosse arrastado para uma guerra por causa de um tratado secreto que nunca aprovaste, entrarias no conflito para honrar a aliança — arriscando destruir a economia — ou tentarias encontrar outra saída? O que fariam?'; ?>

<style>
.wwi-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.wwi-expand-btn { width: 100%; text-align: left; cursor: pointer; display: flex; align-items: center; justify-content: space-between; padding: 0.9rem 1.1rem; border-radius: 0.75rem; border: 1px solid var(--border); background: var(--card-bg); transition: background 0.15s; font-weight: 600; font-size: 0.88rem; color: var(--text); }
.wwi-expand-btn:hover { background: var(--bg); }
.wwi-expand-body { display: none; padding: 0 1.1rem 0.9rem; }
.wwi-expand-body.open { display: block; }
.wwi-timeline { position: relative; padding-left: 1.75rem; }
.wwi-timeline::before { content: ''; position: absolute; left: 0.5rem; top: 0; bottom: 0; width: 2px; background: var(--border); border-radius: 2px; }
.wwi-tl-item { position: relative; padding-bottom: 1.4rem; }
.wwi-tl-item::before { content: ''; position: absolute; left: -1.35rem; top: 0.35rem; width: 0.65rem; height: 0.65rem; border-radius: 50%; background: var(--accent); border: 2px solid var(--bg); }
</style>

<section data-label="Belle Époque" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. O Brilho Antes da Escuridão: A Belle Époque ✨</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">A Europa de 1900 era o centro tecnológico e cultural do mundo. Era a era da eletricidade, dos automóveis, da rádio e das primeiras experiências de aviação. A civilização ocidental celebrava o progresso e acreditava que a razão e a ciência resolveriam todos os problemas.</p>

  <div class="grid md:grid-cols-2 gap-4 mb-4">
    <div class="wwi-card">
      <div class="text-2xl mb-2">🌟</div>
      <h3 class="font-bold text-sm mb-1" style="color:var(--accent);">A Belle Époque</h3>
      <p class="text-sm leading-relaxed" style="color:#334155;">Prosperidade, arte e progresso tecnológico. As classes médias cresciam, as cidades modernizavam-se. Parecia impossível que uma civilização tão racional pudesse destruir-se a si própria.</p>
    </div>
    <div class="wwi-card" style="background:#1e293b;border-color:#334155;">
      <div class="text-2xl mb-2">⚠️</div>
      <h3 class="font-bold text-sm mb-1" style="color:#f87171;">O Paradoxo</h3>
      <p class="text-sm leading-relaxed" style="color:#cbd5e1;">Enquanto as cidades prosperavam, os governos preparavam-se freneticamente para a guerra. Cada país investia cada vez mais em armamento, alianças secretas e planos de mobilização.</p>
    </div>
  </div>
</section>

<section data-label="4 Pilares" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. Os 4 Pilares que Levaram à Guerra 🏛️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-4">A guerra não foi causada por um único evento — foi o resultado de décadas de tensões acumuladas. Clica em cada pilar para explorar.</p>

  <div class="space-y-2 mb-5">
    <div>
      <button class="wwi-expand-btn" data-wwi="imperialismo">
        <span>🌍 Imperialismo — A Luta por Mercados e Colónias</span>
        <span class="wwi-arrow" style="font-size:0.75rem;">▼</span>
      </button>
      <div class="wwi-expand-body" id="wwi-imperialismo">
        <p class="text-sm leading-relaxed mt-2 mb-2" style="color:#334155;">As potências europeias necessitavam de matérias-primas e mercados. Após a unificação em 1871, a Alemanha tornou-se uma potência industrial massiva mas com poucas colónias comparada com o Reino Unido e a França.</p>
        <p class="text-xs" style="color:#475569;">As crises em Marrocos e nos Balcãs mostraram que o espaço geográfico estava a esgotar-se para tantas ambições. A tensão era uma equação com solução forçada.</p>
      </div>
    </div>
    <div>
      <button class="wwi-expand-btn" data-wwi="nacionalismo">
        <span>🏴 Nacionalismo — De Libertação a Arma</span>
        <span class="wwi-arrow" style="font-size:0.75rem;">▼</span>
      </button>
      <div class="wwi-expand-body" id="wwi-nacionalismo">
        <p class="text-sm leading-relaxed mt-2 mb-2" style="color:#334155;"><strong>Revanchismo francês:</strong> a ferida aberta pela perda da Alsácia-Lorena na guerra de 1870 alimentava um desejo de vingança contra a Alemanha.</p>
        <p class="text-sm leading-relaxed mb-2" style="color:#334155;"><strong>Pan-eslavismo:</strong> a Rússia como "irmã mais velha" dos povos eslavos, incentivando a Sérvia a desafiar o Império Austro-Húngaro.</p>
        <p class="text-xs" style="color:#475569;"><strong>Pan-germanismo:</strong> a crença alemã na necessidade de um "espaço vital" para a expansão da nação.</p>
      </div>
    </div>
    <div>
      <button class="wwi-expand-btn" data-wwi="militarismo">
        <span>⚔️ Militarismo — A Paz Armada</span>
        <span class="wwi-arrow" style="font-size:0.75rem;">▼</span>
      </button>
      <div class="wwi-expand-body" id="wwi-militarismo">
        <p class="text-sm leading-relaxed mt-2 mb-2" style="color:#334155;">Pela primeira vez, o potencial industrial de uma nação era medido pela sua capacidade de destruição. <strong>Corrida Naval:</strong> a competição entre ingleses e alemães pela supremacia nos mares (os navios <em>Dreadnought</em>).</p>
        <p class="text-xs" style="color:#475569;">O serviço militar obrigatório tornou-se norma. Empresas como a Krupp e a Vickers lucravam com a inovação constante em artilharia e explosivos.</p>
      </div>
    </div>
    <div>
      <button class="wwi-expand-btn" data-wwi="aliancas">
        <span>🕸️ Sistema de Alianças — A Teia de Aranha</span>
        <span class="wwi-arrow" style="font-size:0.75rem;">▼</span>
      </button>
      <div class="wwi-expand-body" id="wwi-aliancas">
        <div class="grid md:grid-cols-2 gap-3 mt-2">
          <div class="p-3 rounded-lg" style="background:#fef2f2;border:1px solid #fecaca;">
            <p class="text-xs font-semibold mb-1" style="color:#991b1b;">Tríplice Aliança (1882)</p>
            <p class="text-xs" style="color:#7f1d1d;">Alemanha + Áustria-Hungria + Itália</p>
          </div>
          <div class="p-3 rounded-lg" style="background:#eff6ff;border:1px solid #bfdbfe;">
            <p class="text-xs font-semibold mb-1" style="color:#1d4ed8;">Tríplice Entente (1907)</p>
            <p class="text-xs" style="color:#1e3a8a;">França + Reino Unido + Rússia</p>
          </div>
        </div>
        <p class="text-xs mt-2" style="color:#475569;">Um ataque a um é um ataque a todos — qualquer erro diplomático podia transformar-se num incêndio continental.</p>
      </div>
    </div>
  </div>
</section>

<section data-label="O Gatilho" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. O Gatilho: O Atentado de Sarajevo 💥</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="wwi-timeline mb-5">
    <div class="wwi-tl-item">
      <p class="text-xs font-bold mb-0.5" style="color:var(--accent);">28 junho 1914</p>
      <p class="text-sm font-semibold">Atentado em Sarajevo</p>
      <p class="text-xs" style="color:#475569;">Gavrilo Princip, da organização "Mão Negra", assassina o Arquiduque Francisco Fernando (herdeiro do trono Austro-Húngaro) e a sua esposa. Uma sequência de erros de segurança e um acaso fatal tornaram possível o impossível.</p>
    </div>
    <div class="wwi-tl-item">
      <p class="text-xs font-bold mb-0.5" style="color:var(--accent);">Julho 1914</p>
      <p class="text-sm font-semibold">Ultimato austríaco à Sérvia</p>
      <p class="text-xs" style="color:#475569;">A Áustria-Hungria impõe condições humilhantes. A Rússia mobiliza as suas forças em apoio à Sérvia. A teia de alianças começa a puxar os países um a um.</p>
    </div>
    <div class="wwi-tl-item">
      <p class="text-xs font-bold mb-0.5" style="color:var(--accent);">1–4 agosto 1914</p>
      <p class="text-sm font-semibold">Declarações de guerra em cascata</p>
      <p class="text-xs" style="color:#475569;">Alemanha declara guerra à Rússia e à França. Ao invadir a Bélgica neutra para atacar a França, provoca a entrada da Grã-Bretanha. Em apenas quatro dias, a Europa estava em guerra total.</p>
    </div>
  </div>

  <div class="callout-sabias">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed mb-2" style="color:#334155;">O Kaiser Guilherme II (Alemanha), o Rei Jorge V (Reino Unido) e o Czar Nicolau II (Rússia) eram todos <strong>netos da Rainha Vitória</strong> — primos diretos que se enviavam cartas assinadas "Willy", "Georgie" e "Nicky". Em 1914, enviaram os exércitos uns contra os outros.</p>
    <p class="text-sm leading-relaxed" style="color:#334155;">O carro do Arquiduque parou acidentalmente em frente ao café onde Gavrilo Princip estava sentado a comer, após um primeiro ataque falhado nesse mesmo dia. A história mundial mudou por causa de uma paragem imprevista.</p>
  </div>
</section>

<script>
(function () {
  document.querySelectorAll('.wwi-expand-btn').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var id = this.dataset.wwi;
      var body = document.getElementById('wwi-' + id);
      var arrow = this.querySelector('.wwi-arrow');
      var isOpen = body.classList.contains('open');
      body.classList.toggle('open', !isOpen);
      arrow.textContent = isOpen ? '▼' : '▲';
    });
  });
}());
</script>
