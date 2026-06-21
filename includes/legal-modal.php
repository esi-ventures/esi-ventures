    <div id="legal-modal" class="fixed inset-0 z-[100] hidden items-center justify-center p-4 bg-black/90 backdrop-blur-sm">
        <div class="bg-slate-900 border border-white/10 w-full max-w-2xl max-h-[85vh] overflow-hidden flex flex-col rounded shadow-2xl">
            <div class="p-6 border-b border-white/5 flex justify-between items-center bg-slate-950">
                <h3 id="modal-title" class="serif text-3xl text-[#d4af37]"></h3>
                <button onclick="closeLegal()" class="text-white/50 hover:text-white text-4xl leading-none">&times;</button>
            </div>
            <div id="modal-content" class="p-10 overflow-y-auto legal-body bg-slate-900"></div>
            <div class="p-8 border-t border-white/5 text-center bg-slate-950">
                <button onclick="closeLegal()" class="text-[#d4af37] text-[11px] font-bold uppercase tracking-[0.2em] border border-[#d4af37]/30 px-10 py-4 hover:bg-[#d4af37] hover:text-slate-950 transition-all">Cerrar / Close</button>
            </div>
        </div>
    </div>