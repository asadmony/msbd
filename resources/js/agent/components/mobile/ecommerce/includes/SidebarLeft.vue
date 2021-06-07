<template>
	<agent-sidebar-left>
		<router-link class="btn-close" :to="{name: 'agent.ecommerce.home'}">
			<i class="fa fa-home"></i> Home
		</router-link>
		<router-link class="btn-close" :to="{name: 'agent.ecommerce.product.list'}">
			<i class="fa fa-th"></i> Products
		</router-link>
		<router-link class="btn-close" :to="{name: 'agent.ecommerce.order.list'}">
			<i class="fa fa-cube"></i> Orders
		</router-link>
		<router-link class="btn-close" :to="{name: 'agent.ecommerce.home'}">
			<i class="fa fa-info-circle"></i> About us
		</router-link>
		<router-link class="btn-close" :to="{name: 'agent.ecommerce.settings'}">
			<i class="fa fa-cog"></i> Settings
		</router-link>
	</agent-sidebar-left>
</template>