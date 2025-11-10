<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->enum('trans_type', [
                'deposit',
                'withdrawal',
                'loan_issue',
                'loan_repayment',
                'share_purchase',
                'expense'
            ]);
            $table->foreignId('reference_id')->nullable(); // linked record id
            $table->foreignId('member_id')->nullable()->constrained('members')->nullOnDelete();
            $table->decimal('amount', 12, 2);
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
